<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Change_order extends Model
{
    protected $fillable = [
        'id', 'project_id', 'sort', 'date', 'description', 'document','reason'
    ];
}
