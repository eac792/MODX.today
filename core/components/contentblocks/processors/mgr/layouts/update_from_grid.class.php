<?php
/**
 */
class cbLayoutUpdateFromGridProcessor extends modProcessor {
    /** @var array $records */
    public $record;

    /**
     * @return bool|null|string
     */
    public function initialize() {
        $data = $this->getProperty('data');
        if (empty($data)) return $this->modx->lexicon('invalid_data');
        $this->record = $this->modx->fromJSON($data);
        if (empty($this->record)) return $this->modx->lexicon('invalid_data');
        return true;
    }

    /**
     * @return array|string
     */
    public function process() {
        if (empty($this->record['id'])) {
            return $this->failure($this->modx->lexicon('contentblocks.error.missing_id'));
        }

        $field = $this->modx->getObject('cbLayout', $this->record['id']);
        if (!$field) {
            return $this->failure($this->modx->lexicon('contentblocks.error.layout_not_found'));
        }

        $field->set('sortorder', $this->record['sortorder']);
        if ($field->save()) {
            return $this->success();
        }
        return $this->failure($this->modx->lexicon('contentblocks.error.error_saving_object'));
    }
}
return 'cbLayoutUpdateFromGridProcessor';
