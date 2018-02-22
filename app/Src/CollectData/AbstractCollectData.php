<?php

namespace App\Src\CollectData;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;

abstract class AbstractCollectData {

    protected $table;
    protected $path;
    protected $primaryKey = null;
    protected $request;
    protected $columnListing;

    public function __construct(array $details) {
        foreach ($details as $key => $value) {
            $key = ucfirst($key);
            $method = "set{$key}";
            $this->$method($value);
        }
    }

    private function setTable($table) {
        $this->table = $table;
    }

    private function setPath($path) {
        $this->path = $path;
    }

    private function setPrimaryKey($primaryKey) {
        $this->primaryKey = $primaryKey;
    }

    private function setRequest(Request $request) {
        $this->request = $request;
    }

    protected function setColumnListing() {
        $this->columnListing = DB::getSchemaBuilder()->getColumnListing($this->table);
        return $this;
    }

    protected function addPrimaryKey() {
        if (!is_null($this->primaryKey)) {
            $this->columnListing[] = $this->primaryKey;
        }
    }

    protected function checkFileValue($value) {
        if ($value instanceof UploadedFile) {
            return uploadFile(['file' => $value, 'path' => $this->path]);
        }
        return $value;
    }
    /**
     * @return type array
     */
    abstract public function collect();

}
