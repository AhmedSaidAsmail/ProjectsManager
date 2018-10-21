<?php
namespace App\Src\HierarchyData;

use Illuminate\Database\Eloquent\Collection as LaravelCollection;

class Collection implements RenderableArray
{
    /**
     * @var LaravelCollection
     */
    private $collection;
    /**
     * @var string
     */
    private $parentName;
    /**
     * @var string
     */
    private $nameColumn;
    /**
     * @var Collection[]
     */
    private $tempCollection = [];
    /**
     * @var array
     */
    private $returnCollection;

    /**
     * @param LaravelCollection $collection Given Laravel collection
     * @param string $parentName The Name of parent column
     * @param string $nameColumn The name of column title in table
     */
    public function __construct(LaravelCollection $collection, $parentName, $nameColumn)
    {
        $this->collection = $collection;
        $this->parentName = $parentName;
        $this->nameColumn = $nameColumn;
    }

    /**
     * Store Laravel Collection in a temped array
     *
     * @return $this
     */
    private function setTempCollection()
    {
        foreach ($this->collection as $collection) {
            $this->tempCollection[$collection->id] = $collection;
        }
        return $this;
    }

    /**
     * Rebuilding Collection as Hierarchy Array
     *
     */

    private function setReturnCollection()
    {
        $this->returnCollection = new ItemCollection($this->parseTree());
    }

    private function parseTree($root = 0)
    {
        $return = [];
        foreach ($this->tempCollection as $id => $item) {
            if ($item->{$this->parentName} == $root) {
                unset($this->tempCollection[$id]);
//                $return[] = array(
//                    'id' => $id,
//                    'name' => $item->{$this->nameColumn},
//                    'item' => $item,
//                    'children' => $this->parseTree($id)
//                );
                $return[] = (new ItemResolver())
                    ->setID($id)
                    ->setTitle($item->{$this->nameColumn})
                    ->setModel($item)
                    ->setChilds($this->parseTree($id));
            }
        }
        return empty($return) ? null : $return;
    }

    /**
     * @return ItemCollection
     */

    public function renderArray()
    {
        $this->setTempCollection()
            ->setReturnCollection();
        return $this->returnCollection;
    }

}