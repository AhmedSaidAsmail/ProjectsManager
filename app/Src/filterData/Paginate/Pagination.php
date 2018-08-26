<?php
namespace App\Src\FilterData\Paginate;

use App\Src\FilterData\DataResolver;

class Pagination
{
    const taken = ['offset', 'limit'];
    /**
     * @var DataResolver
     */
    private $resolver;
    /**
     * @var int The all rows in Collection
     */
    private $rows;
    private $pages;
    private $current;
    private $queries;
    private static $maximumPages = 5;

    public function __construct(DataResolver $dataResolver, $maximumPages = null)
    {
        $this->resolver = $dataResolver;
        static::$maximumPages = !is_null($maximumPages) ? $maximumPages : static::$maximumPages;

    }

    private function setRows()
    {
        $this->rows = count($this->resolver->getResult());
    }

    private function setPages()
    {
        $this->pages = $this->resolver->getPages();
    }

    private function setCurrent()
    {
        $this->current = $this->resolver->getCurrent();
    }

    private function setQueries()
    {
        $this->queries = array_filter($this->resolver->getRequest()->all(), function ($key) {
            return !in_array($key, self::taken);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function __toString()
    {
        return "test";

    }

}