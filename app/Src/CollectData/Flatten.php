<?php

namespace App\Src\CollectData;

class Flatten extends AbstractCollectData {

    public function collect() {
        $collection = [];
        $this->setColumnListing()->addPrimaryKey();
        foreach ($this->columnListing as $field) {
            if (!is_null($this->request->$field)) {
                $collection[$field] = $this->request->$field;
            }
        }
        return $collection;
    }

}
