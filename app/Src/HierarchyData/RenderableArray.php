<?php

namespace App\Src\HierarchyData;

interface RenderableArray
{
    /**
     * @return ItemCollection
     */
    public function renderArray();
}
