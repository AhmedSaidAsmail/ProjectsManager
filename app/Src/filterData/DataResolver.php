<?php

namespace App\Src\FilterData;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class DataResolver
{
    const dateFrom = 'date_from';
    const dateTo = 'date_to';
    /**
     * @var Request
     */
    private $request;
    /**
     * @var DataStorage
     */
    private $adapter;
    /**
     * @var Model|HasMany
     */
    private $result;
    /**
     * @var int
     */
    private $pages;

    public function __construct(Request $request, $data)
    {
        $this->adapter = new DataStorage($request, $data);
        $this->request = $request;

    }


    private function filter()
    {
        $this->result = $this->adapter->getData();
        foreach ($this->adapter->getFields() as $field => $data) {
            switch ($field) {
                case self::dateFrom:
                    $this->filterDateFrom($data);
                    break;
                case self::dateTo:
                    $this->filterDateTo($data);
                    break;
                default :
                    $this->filterData($field, $data);
            }

        }
        return $this;
    }

    private function filterDateFrom($filter)
    {
        $this->result = $this->result->where('data', '>=', $filter);
    }

    private function filterDateTo($filter)
    {
        $this->result = $this->result->where('data', '<=', $filter);
    }

    private function filterData($key, $filter)
    {
        $this->result = $this->result->where($key, '=', $filter);
    }

    private function setOrdering()
    {
        if (!is_null($this->adapter->getOrders())) {
            $this->result = call_user_func_array([$this->result, 'orderBy'], $this->adapter->getOrders());

        }
        return $this;
    }

    private function setPages()
    {
        if ($this->adapter->getLimit()) {
            $this->pages = ceil($this->result->count() / $this->adapter->getLimit());
        }
        return $this;
    }

    private function setOffset()
    {
        if ($this->adapter->getOffset()) {
            $this->result->offset($this->adapter->getOffset());
        }
        return $this;
    }

    private function setLimit()
    {
        if ($this->adapter->getLimit()) {
            $this->result->limit($this->adapter->getLimit());
        }
        return $this;
    }

    public function execute()
    {
        $this->adapter->render();
        $this->filter()
            ->setOrdering()
            ->setPages()
            ->setOffset()
            ->setLimit();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */

    public function getResult()
    {
        return $this->result->get();
    }

    /**
     * @return int
     */

    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @return int
     */

    public function getCurrent()
    {
        return $this->adapter->getCurrent();
    }

    /**
     * @return Request
     */
    public function getRequest(){
        return $this->request;
    }

}