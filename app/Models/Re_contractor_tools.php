<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Re_contractor_tools extends Model
{
    protected $table = 're_w_contractor_tools';
    protected $fillable = [
        'report_id', 'tool', 'number', 'note'
    ];
}
