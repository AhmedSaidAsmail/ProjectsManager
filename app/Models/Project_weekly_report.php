<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project_weekly_report extends Model
{
    protected $fillable = [
        'project_id', 'starting_date', 'ending_date', 'financial_achievement_ratio', 'actual_completion_rate', 'percentage_achievement_required', 'text'
    ];

    public function contractorTeam()
    {
        return $this->hasMany(Re_contractor_team_structure::class, 'report_id');
    }
}
