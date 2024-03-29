<?php

/**
 * @package moregallery
 * @extends ResourceCreateManagerController
 */
class mgResourceCreateManagerController extends ResourceCreateManagerController {
    /**
     * @return array
     */
    public function getLanguageTopics() {
        return array('resource','moregallery:default');
    }

    public function loadCustomCssJs() {
        $mgrUrl = $this->modx->getOption('manager_url',null,MODX_MANAGER_URL);
        $assetsUrl = $this->modx->getOption('moregallery.assets_url', null, $this->modx->getOption('assets_url').'components/moregallery/');

        $corePath = $this->modx->getOption('moregallery.core_path', null, $this->modx->getOption('core_path').'components/moregallery/');
        /** @var moreGallery $moreGallery */
        $moreGallery = $this->modx->getService('moregallery', 'moreGallery', $corePath.'model/moregallery/');
        if (!$moreGallery) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, 'Error loading moreGallery class from ' . $corePath);
            return;
        }
        $moreGallery->setWorkingContext($this->resource->get('context_key'));

        $this->addHtml('<script type="text/javascript">
            moreGallery.config = '.$this->modx->toJSON($moreGallery->config).';
        </script>');
        $this->addJavascript($assetsUrl.'mgr/js/moregallery.class.js');
        $this->addJavascript($mgrUrl.'assets/modext/util/datetime.js');
        $this->addJavascript($mgrUrl.'assets/modext/widgets/element/modx.panel.tv.renders.js');
        $this->addJavascript($mgrUrl.'assets/modext/widgets/resource/modx.grid.resource.security.local.js');
        $this->addJavascript($mgrUrl.'assets/modext/widgets/resource/modx.panel.resource.tv.js');
        $this->addJavascript($mgrUrl.'assets/modext/widgets/resource/modx.panel.resource.js');
        $this->addJavascript($assetsUrl.'mgr/js/widgets/mgresource.panel.resource.js');
        $this->addJavascript($mgrUrl.'assets/modext/sections/resource/create.js');
        $this->addHtml('
        <script type="text/javascript">
        // <![CDATA[
        MODx.config.publish_document = "'.$this->canPublish.'";
        MODx.onDocFormRender = "'.$this->onDocFormRender.'";
        MODx.ctx = "'.$this->ctx.'";
        Ext.onReady(function() {
            MODx.load({
                xtype: "modx-page-resource-create"
                ,record: '.$this->modx->toJSON($this->resourceArray).'
                ,publish_document: "'.$this->canPublish.'"
                ,canSave: "'.($this->modx->hasPermission('save_document') ? 1 : 0).'"
                ,show_tvs: '.(!empty($this->tvCounts) ? 1 : 0).'
                ,mode: "create"
            });
        });
        // ]]>
        </script>');
        $this->loadRichTextEditor();
    }
}
