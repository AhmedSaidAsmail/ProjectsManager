<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeLinesItems extends Model
{
    protected $fillable = ['time_line_id', 'activity_id', 'activity_name', 'original', 'starting_date', 'ending_date'];
}
