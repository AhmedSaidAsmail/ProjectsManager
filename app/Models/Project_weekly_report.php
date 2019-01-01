<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project_weekly_report extends Model
{
    protected $fillable = [
        'project_id',
        'starting_date',
        'ending_date',
        'financial_achievement_ratio',
        'actual_completion_rate',
        'percentage_achievement_required',
        'text', 'schedule',
        'monthly'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function contractorTeam()
    {
        return $this->hasMany(Re_contractor_team_structure::class, 'report_id');
    }

    public function tools()
    {
        return $this->hasMany(Re_contractor_tools::class, 'report_id');
    }

    public function tests()
    {
        return $this->hasMany(W_Report_Test::class, 'report_id');
    }

    public function requests()
    {
        return $this->hasMany(W_Report_Request::class, 'report_id');
    }

    public function submittals()
    {
        return $this->hasMany(W_Report_Submittal::class, 'report_id');
    }

    public function files()
    {
        return $this->hasMany(W_Report_File::class, 'report_id');
    }

    public function additionalInfo()
    {
        return $this->hasOne(W_Report_Additional::class, 'report_id');
    }
}
