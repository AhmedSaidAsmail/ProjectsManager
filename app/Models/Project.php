<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'sort', 'distance', 'contractor_id', 'owner_id', 'contract_no', 'contract_value', 'contract_period', 'city'
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

    public function submittals()
    {
        return $this->hasMany(Submittal::class);

    }

    public function requests()
    {
        return $this->hasMany(Request::class);
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
    public function files(){
        return $this->hasMany(Project_file::class);
    }
}
