<?php
/**
 * Searches modResources.
 */
class RedactorResourceSearchProcessor extends modObjectGetListProcessor {
    public $classKey = 'modResource';
    public $languageTopics = array('resource');
    public $defaultSortField = 'pagetitle';
    public $includeIntrotext = true;

    /**
     * Adjust the query prior to the COUNT statement to only get top contenders.
     *
     * @param xPDOQuery $c
     * @return xPDOQuery
     */
    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $query = $this->getProperty('query');
        $c->where(array(
            'deleted' => false,
        ));
        $c->andCondition(array(
            'pagetitle:LIKE' => "%$query%",
            'OR:longtitle:LIKE' => "%$query%",
            'OR:menutitle:LIKE' => "%$query%",
            'OR:introtext:LIKE' => "%$query%",
        ));
        if (is_numeric($query)) {
            $c->orCondition(array(
                'id' => (int)$query
            ));
        }

        $c->select($this->modx->getSelectColumns('modResource', 'modResource', '', array(
            'id',
            'pagetitle',
            'introtext'
        )));

        $this->includeIntrotext = $this->modx->getOption('redactor.typeahead.include_introtext', null, true);

        return $c;
    }

    /**
     * Prepare the row into an array.
     * @param xPDOObject $object
     * @return array
     */
    public function prepareRow(xPDOObject $object) {
        $charset = $this->modx->getOption('modx_charset', null, 'UTF-8');
        $objectArray = $object->toArray('', false, true);
        $objectArray['pagetitle'] = htmlentities($objectArray['pagetitle'], ENT_COMPAT, $charset);
        $objectArray['tokens'] = array(
            (string)$objectArray['id'],
            $objectArray['pagetitle'],
            $objectArray['introtext']
        );
        if (!$this->includeIntrotext) unset($objectArray['introtext']);
        return $objectArray;
    }

    /**
     * Return arrays of objects (with count) converted to JSON.
     *
     * The JSON result includes two main elements, total and results. This format is used for list
     * results.
     *
     * @access public
     * @param array $array An array of data objects.
     * @param mixed $count The total number of objects. Used for pagination.
     * @return string The JSON output.
     */
    public function outputArray(array $array,$count = false) {
        return $this->modx->toJSON($array);
    }
}
return 'RedactorResourceSearchProcessor';
