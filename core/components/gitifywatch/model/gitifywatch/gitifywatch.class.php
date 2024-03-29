<?php
namespace mhwd;

use Git;
use GitRepo;
use modmore\Gitify\Gitify;
use modX;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

class GitifyWatch {
    public $config = array();

    protected $environment = array();

    /** @var modX|null  */
    public $modx;

    /** @var Gitify|null  */
    protected $gitify;

    /** @var GitRepo|null */
    protected $repository;

    public function __construct(modX $modx, array $config = array())
    {
        $this->modx = $modx;
        $this->config = array_merge(array(
            'repositoryPath' => $this->modx->getOption('gitifywatch.repository_path', null, MODX_BASE_PATH, true)
        ), $config);
    }

    public function getGitifyInstance(array $options = array()) {
        if (!$this->gitify) {
            $path = $this->modx->getOption('gitifywatch.gitify_path', null, false, true);
            if (!$path || !is_dir($path)) {
                $this->modx->log(modX::LOG_LEVEL_ERROR, 'Could not load Gitify: no path specified or it is not a valid directory: ' . $path, '', __METHOD__, __FILE__, __LINE__);
                return false;
            }

            if (!file_exists($path . 'application.php')) {
                $this->modx->log(modX::LOG_LEVEL_ERROR, 'Could not load Gitify: this integration requires at last v0.8.', '', __METHOD__, __FILE__, __LINE__);
                return false;
            }

            try {
                define('GITIFY_API_MODE', true);
                define('GITIFY_WORKING_DIR', $this->config['repositoryPath']);
                $gitify = include $path . 'application.php';
            } catch (\Exception $e) {
                $this->modx->log(modX::LOG_LEVEL_ERROR, 'Could not load Gitify: ' . $e->getMessage(), '', __METHOD__, __FILE__, __LINE__);
                return false;
            }

            $this->gitify = $gitify;
        }
        return $this->gitify;
    }

    public function getGitRepository()
    {
        if (!$this->repository) {
            $path = dirname(dirname(__FILE__)) . '/kbjr_gitphp/Git.php';
            require_once($path);
            if (!class_exists('Git')) {
                $this->modx->log(modX::LOG_LEVEL_ERROR, 'Could not load Git helper class from '. $path, '', __METHOD__, __FILE__, __LINE__);
                return false;
            }

Git::set_bin('/usr/local/bin/git');

            $repo = Git::open($this->config['repositoryPath']);

            if (!$repo) {
                $this->modx->log(modX::LOG_LEVEL_ERROR, 'Could not load Git Repository in ' . $this->config['repositoryPath'], '', __METHOD__, __FILE__, __LINE__);
                return false;
            }
            $this->repository = $repo;
        }

        return $this->repository;
    }

    public function extract(array $partitions = array(), $commit = true, $commitMessage = '')
    {
        $gitify = $this->getGitifyInstance();
        if (!$gitify) {
            return false;
        }

        $extract = $gitify->find('extract');
        $inputArray = array(
            'command' => 'extract',
        );
        if (count($partitions) > 0) {
            $inputArray['partitions'] = $partitions;
        }
        $input = new ArrayInput($inputArray);
        $output = new BufferedOutput();
        $returnCode = $extract->run($input, $output);

        if ($returnCode === 0) {
            if ($commit) {
                return $this->commitAndPush($commitMessage);
            }
            return true;
        }

        $this->modx->log(modX::LOG_LEVEL_ERROR, 'Error extracting data: ' . $output->fetch(), '', __METHOD__, __FILE__, __LINE__);
        return false;
    }


    /**
     * @param string $message
     * @return bool
     */
    public function commitAndPush($message = '')
    {
        $repo = $this->getGitRepository();
        $environment = $this->getEnvironment();

        if (!$repo) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, 'Could not commit changes; repository was not found.');
            return false;
        }

        if (!$environment) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, 'Could not commit changes; environment configuration not found.');
            return false;
        }

        try {
            $log = array();
            // Add all changed files
            $log['add'] = $repo->add('.');
            $log['commit'] = $repo->commit($message);

            $remote = (!empty($environment['remote'])) ? $environment['remote'] : 'origin';
            $branch = (!empty($environment['branch'])) ? $environment['branch'] : $repo->active_branch();
            $log['push'] = $repo->push($remote, $branch);

            $this->modx->log(modX::LOG_LEVEL_WARN, 'Auto-committing & pushing results: ' . print_r($log, true), '', __METHOD__, __FILE__, __LINE__);

            return true;
        } catch (\Exception $e) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, 'Error committing & pushing: ' . $e->getMessage(), '', __METHOD__, __FILE__, __LINE__);
            return false;
        }
    }

    public function getEnvironment()
    {
        if (empty($this->environment)) {
            try {
                $this->getGitifyInstance();
                $config = Gitify::loadConfig();
            } catch (\RuntimeException $e) {
                $this->modx->log(modX::LOG_LEVEL_ERROR, 'Error loading environment configuration: ' . $e->getMessage(), '', __METHOD__, __FILE__, __LINE__);
                return false;

            }

            $envs = (isset($config['environments']) && is_array($config['environments'])) ? $config['environments'] : array();
            $defaults = array(
                'name' => '-unnamed environment-',
                'auto_commit_and_push' => true,
                'remote' => 'origin',
                'partitions' => array(
                    'modResource' => 'content',
                    'modTemplate' => 'templates',
                    'modCategory' => 'categories',
                    'modTemplateVar' => 'template_variables',
                    'modChunk' => 'chunks',
                    'modSnippet' => 'snippets',
                    'modPlugin' => 'plugins'
                )
            );
            
            if (isset($envs['defaults']) && is_array($envs['defaults'])) {
                $defaults = array_merge($defaults, $envs['defaults']);
            }

            $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : MODX_HTTP_HOST;
            $environment = (isset($envs[$host])) ? $envs[$host] : array();
            $this->environment = array_merge($defaults, $environment);
        }
        return $this->environment;
    }




}