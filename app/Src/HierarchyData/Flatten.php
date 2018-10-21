<?php

namespace App\Src\HierarchyData;

class Flatten implements RenderableArray
{
    /**
     * @var RenderableArray
     */
    protected $returnedArray;

    public function __construct(RenderableArray $returnedArray)
    {
        $this->returnedArray = $returnedArray;
    }

    /**
     * @return ItemCollection
     */
    public function renderArray()
    {
        return $this->flattenCollection($this->returnedArray->renderArray());

    }

    /**
     * @param ItemCollection $collection
     * @return ItemCollection
     */

    private function flattenCollection(ItemCollection $collection)
    {
        $itemCollection = $collection->all();
        $collection->replaceCollection($this->flattenItems($itemCollection));
        return $collection;
    }

    /**
     * @param ItemResolver[] $array
     * @param array $returnArray
     * @return array
     */
    private function flattenItems(array $array, &$returnArray = [])
    {
        foreach ($array as $item) {
            if ($item->haveChilds()) {
                $childs = $item->getChilds();
                $item->removeChilds();
                $returnArray[] = $item;
                $this->flattenItems($childs, $returnArray);
            } else {
                $returnArray[] = $item;
            }
        }
        return empty($returnArray) ? [] : $returnArray;
    }
}
