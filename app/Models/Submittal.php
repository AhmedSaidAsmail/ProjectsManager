<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submittal extends Model
{

    protected $fillable = [
        'id', 'project_id', 'sort', 'number', 'related_item', 'date', 'description', 'document', 'category'
    ];
}
