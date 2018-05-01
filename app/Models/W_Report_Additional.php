<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class W_Report_Additional extends Model
{
    protected $table = 'w_report_additional';
    protected $fillable = [
        'report_id', 'done_working', 'report_status', 'working_rate', 'completion_Schedule', 'working_next_month', 'consultant_note', 'contractor_required', 'owner_required', 'consultant_recommendations'
    ];
}
