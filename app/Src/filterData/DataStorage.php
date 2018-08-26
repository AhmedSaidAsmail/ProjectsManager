<?php
namespace App\Src\FilterData;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use InvalidArgumentException;

class DataStorage
{
    const noUsed = ['_token', '_method'];
    const taken = ['offset', 'limit'];
    const orderBy = ['order_by', 'dir'];
    const offset = 0;
    const limit = 10;
    /**
     * The default offset if is defined
     *
     * @var int
     */
    private static $defaultLimit;
    /**
     * @var int|null Offset
     */
    private $offset = null;
    /**
     * @var int|null Limit
     */
    private $limit = null;
    /**
     * @var int
     */
    private $current;
    /**
     * @var array fields which will filtered according to
     */
    private $fields = [];
    /**
     * @var Model|HasMany
     */
    private $data;
    /**
     * @var Request
     */
    private $request;
    /**
     * The ordering for result
     *
     * @var array
     */
    private $orders = [];

    public function __construct(Request $request, $data, $limit = 0)
    {
        $this->setData($data);
        self::$defaultLimit = $limit;
        $this->request = $request;
    }

    /**
     * @return void
     */
    private function setFields()
    {
        $this->fields = array_filter($this->request->all(), function ($key) {
            return !in_array($key, self::noUsed) || !in_array($key, self::taken) || !in_array($key, self::orderBy);
        }, ARRAY_FILTER_USE_KEY);
    }

    private function setOrdering()
    {
        $this->orders = array_filter($this->request->all(), function ($key) {
            return in_array($key, self::orderBy);
        }, ARRAY_FILTER_USE_KEY);
    }

    /**
     * @param Model|HasMany $data
     */

    private function setData($data)
    {
        if (!$data instanceof Model || !$data instanceof HasMany) {
            throw new InvalidArgumentException('invalid data given');
        }
        $this->data = $data;
    }

    /**
     * @param array $fields Request fields array
     */

    private function setOffsetAndLimit(array $fields)
    {
        switch (true) {
            case self::$defaultLimit:
                $this->limit = self::$defaultLimit;
                $this->current = 1;
                break;
            case isset($fields['offset']) && isset($fields['limit']):
                $this->limit = $fields['limit'];
                $this->offset = $fields['limit'] * $fields['offset'];
                $this->current = $fields['offset']++;
                break;
            case isset($fields['offset']):
                $this->offset = $fields['offset'] * self::limit;
                $this->limit = self::limit;
                $this->current = $fields['offset']++;
                break;
            case isset($fields['limit']):
                $this->limit = $fields['limit'];
                $this->current = 0;
                break;
        }

    }

    /**
     * @return array
     */

    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @return Model|HasMany
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return int|null
     */

    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @return int|null
     */

    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @return array
     */
    public function getOrders()
    {
        return $this->orders;
    }

    public function render()
    {
        $this->setFields();
        $this->setOrdering();
        $this->setOffsetAndLimit($this->request->all());

    }

}