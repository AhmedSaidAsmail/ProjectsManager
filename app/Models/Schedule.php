<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'project_id',
        'activity_id',
        'related_to',
        'sort',
        'activity_name',
        'default_duration',
        'planed_starting_date',
        'actual_starting_date',
        'actual_ending_date',
        'status',
        'status_reason',
        'note'
    ];
    protected $casts = [
        'planed_starting_date' => 'date',
        'actual_starting_date' => 'date',
        'actual_ending_date' => 'date',
    ];

    public function relatedTo()
    {
        return $this->hasMany(get_class($this), 'related_to', 'activity_id');
    }

    public function parent()
    {
        return $this->belongsTo(__CLASS__, 'related_to', 'activity_id');
    }
}
