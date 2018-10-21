<?php

namespace App\Src\HierarchyData\Model;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    protected $fillable = ['id', 'parent', 'name'];

}
