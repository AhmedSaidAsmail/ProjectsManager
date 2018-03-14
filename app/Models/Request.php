<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'id', 'project_id', 'sort', 'number', 'related_item', 'date', 'code', 'description', 'document'
    ];
}
