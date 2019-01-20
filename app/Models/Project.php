<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'sort', 'image', 'description', 'distance', 'contractor_id', 'owner_id', 'contract_no', 'contract_value', 'contract_starting', 'contract_ending', 'city'
    ];

    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function consultantEngineers()
    {
        return $this->hasMany(Consultants_crew::class);
    }

    public function contractorEngineers()
    {
        return $this->hasMany(Contractors_crew::class);
    }

    public function ownerEngineers()
    {
        return $this->hasMany(Owners_crew::class);
    }

    public function quantity()
    {
        return $this->hasOne(Project_quantities::class);
    }

    public function documents()
    {
        return $this->hasMany(Project_document::class);
    }

    public function projectManager()
    {
//        return $this->hasMany(Consultants_crew::class)
//            ->where('consultants_crews.consultant_engineer_position','manager')
//            ->join('engineers','engineers.id','=','consultants_crews.consultant_engineer_id')->first();
        return $this->hasMany(Consultants_crew::class)
            ->where('consultants_crews.consultant_engineer_position', 'manager')
            ->first();
    }

    public function schedules()
    {
        return $this->hasMany(ProjectSchedule::class);
    }

    public function project_schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function timeLines()
    {
        return $this->hasMany(TimeLine::class);
    }

    public function submittals()
    {
        return $this->hasMany(Submittal::class);

    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function tenders()
    {
        return $this->hasMany(Tender::class);
    }

    public function shopDrawings()
    {
        return $this->hasMany(Shop_drawing::class);
    }

    public function cordnationDrawings()
    {
        return $this->hasMany(Cordnation_drawing::class);
    }

    public function changeOrders()
    {
        return $this->hasMany(Change_order::class);
    }

    public function files()
    {
        return $this->hasMany(Project_file::class);
    }

    public function weeklyReports()
    {
        return $this->hasMany(Project_weekly_report::class)->where('project_weekly_reports.monthly', 0);
    }

    public function monthlyReports()
    {
        return $this->hasMany(Project_weekly_report::class)->where('project_weekly_reports.monthly', 1);
    }

    public function letters()
    {
        return $this->hasMany(ProjectLetters::class);
    }
}
