<?php
namespace App\Src\CheckParentChildsRelation;

use Illuminate\Database\Eloquent\Model;
use RuntimeException;

class CheckRelations
{
    /**
     * @var Model $model Laravel model which will checked
     */
    private $model;
    /**
     * @var string $related Column name which related with parent
     */
    private $related;
    /**
     * @var integer $relatedValue Related column value
     */
    private $relatedValue;
    /**
     * @var string Parent column name
     */
    private $parent;
    /**
     * @var array $request Data to check
     */
    private $request;

    public function __construct(array $request, $parentName, $relatedName, Model $model)
    {
        $this->model = $model;
        $this->request = $request;
        $this->parent = $request[$parentName];
        $this->related = $relatedName;
        $this->relatedValue = $request[$relatedName];

    }

    /**
     * @return bool|RuntimeException
     */
    public function check()
    {
        if (is_null($this->parent)) {
            return true;
        }
        if ($this->parentRelatedColumn() != $this->relatedValue) {
            throw new RuntimeException(sprintf('%s given is not the same with parent row', $this->related));
        }

    }

    private function parentRelatedColumn()
    {
        return $this->model
            ->where('id', '=', $this->parent)
            ->first()
            ->{$this->related};
    }

}