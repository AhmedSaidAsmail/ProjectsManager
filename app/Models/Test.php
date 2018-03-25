<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'id', 'project_id', 'sort', 'date', 'description', 'document','project_test_sort_id','location','result'
    ];
}
