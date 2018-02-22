<?php

namespace App\Src\CollectData;

class Multiple extends AbstractCollectData {

    public function collect() {
        $collection = [];
        $this->setColumnListing()->addPrimaryKey();
        foreach ($this->columnListing as $field) {
            if (isset($this->request->$field) && !is_null($this->request->$field)) {
                $this->perpareCollectionData($collection, $field);
            }
        }
        return $collection;
    }

    private function perpareCollectionData(array &$collection, $field) {
        foreach ($this->request->$field as $key => $fieldData) {
            $collectionKey = (!is_null($this->primaryKey) && $this->primaryKey == $field) ? "id" : $field;
            $collectionValue = $this->checkFileValue($fieldData);
            $collection[$key][$collectionKey] = $collectionValue;
        }
    }

}
