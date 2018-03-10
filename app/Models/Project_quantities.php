<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project_quantities extends Model
{
    protected $table = 'project_quantities';
    protected $fillable = ['project_id', 'steps', 'buildings_num', 'quantity_table'];
}
