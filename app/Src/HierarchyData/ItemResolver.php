<?php

namespace App\Src\HierarchyData;


use Illuminate\Database\Eloquent\Model;

class ItemResolver
{
    /**
     * @var $id integer ID of the item
     */
    private $id;
    /**
     * @var $title string Title of the item
     */
    private $title;
    /**
     * @var Model Stored laravel model
     */
    private $model;
    /**
     * @var ItemResolver[] Item Childes
     */
    private $childs = [];

    /**
     * @param $id
     * @return $this
     */
    public function setID($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param Model $model
     * @return $this
     */
    public function setModel(Model $model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @param array $childs
     * @return $this
     */

    public function setChilds(array $childs = null)
    {
        $this->childs = $childs;
        return $this;
    }

    /**
     * Checking if item have childs
     *
     * @return bool
     */
    public function haveChilds()
    {
        return !is_null($this->childs) ? true : false;
    }

    /**
     * @return ItemResolver[]
     */
    public function getChilds()
    {
        return $this->childs;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Removing item childs
     *
     * @return void
     */

    public function removeChilds()
    {
        $this->childs = null;
    }

    /**
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->model->{$property};
    }
}