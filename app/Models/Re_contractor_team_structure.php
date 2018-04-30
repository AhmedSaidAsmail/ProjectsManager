<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Re_contractor_team_structure extends Model
{
    protected $table = 're_w_contractor_team_structure';
    protected $fillable = [
        'report_id', 'position', 'number', 'name'
    ];
}
