<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project_file extends Model
{
    protected $fillable = [
        'id', 'project_id', 'sort', 'date', 'description', 'document'
    ];
}
