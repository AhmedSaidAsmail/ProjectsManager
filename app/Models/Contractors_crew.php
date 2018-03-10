<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contractors_crew extends Model
{
    protected $fillable = ['project_id','contractor_engineer_id', 'contractor_engineer_position'];
}
