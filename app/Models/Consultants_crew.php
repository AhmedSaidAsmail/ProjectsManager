<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultants_crew extends Model
{
    protected $fillable = ['project_id','consultant_engineer_id', 'consultant_engineer_position'];
}
