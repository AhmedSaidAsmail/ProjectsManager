<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectSchedule extends Model
{
    protected $table="project_schedule";
    protected $fillable=['project_id','date','description','document'];
}
