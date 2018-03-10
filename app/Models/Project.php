<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'sort', 'distance', 'contractor_id', 'owner_id', 'contract_no', 'contract_value', 'contract_period', 'city'
    ];

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
}
