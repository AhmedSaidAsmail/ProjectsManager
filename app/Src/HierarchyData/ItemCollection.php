<?php
namespace App\Src\HierarchyData;


class ItemCollection
{
    /**
     * @var array ItemResolver[]
     */
    private $collection = [];

    /**
     * @param array $collection
     */

    public function __construct(array $collection)
    {
        $this->collection = $collection;
    }

    /**
     * replacing Collection items
     *
     * @param array $collection
     */
    public function replaceCollection(array $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return array ItemResolver[]
     */
    public function all()
    {
        return $this->collection;
    }

    /**
     * @return ItemResolver[]
     */
    public function get()
    {
        return $this->collection;
    }

    /**
     * @param $limit
     * @return ItemCollection
     */
    public function limit($limit)
    {
        return new static(array_slice($this->collection, 0, $limit));
    }

    /**
     * @param $size
     * @return ItemCollection
     */
    public function chunk($size)
    {
        $chunks = [];
        foreach (array_chunk($this->collection, $size) as $chunk) {
            $chunks[] = $chunk;
        }
        return new static($chunks);
    }

}