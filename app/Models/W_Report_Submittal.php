<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class W_Report_Submittal extends Model
{
    protected $table = 'w_report_submittal';
    protected $fillable = ['report_id', 'submittal_id'];

    public function submittal()
    {
        return $this->belongsTo(Submittal::class, 'submittal_id');
    }
}
