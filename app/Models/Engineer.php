<?php

namespace App\Models;

use App\User;


class Engineer extends User
{
    protected $fillable = [
        'contractor_id', 'consultant_id', 'owner_id', 'name', 'email', 'password', 'img', 'active', 'permission_id',
    ];

    public function contractorCrew()
    {
        return $this->hasMany(Contractors_crew::class, 'contractor_engineer_id');
    }

    public function ownerCrew()
    {
        return $this->hasMany(Owners_crew::class, 'owner_engineer_id');
    }

    public function consultantCrew()
    {
        return $this->hasMany(Consultants_crew::class, 'consultant_engineer_id');
    }



    public function follow()
    {
        if (!is_null($this->consultant()->first())) {
            return $this->consultant()->first();
        } elseif (!is_null($this->contractor()->first())) {
            return $this->contractor()->first();
        } elseif (!is_null($this->owner()->first())) {
            return $this->owner()->first();
        }
    }

    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    public function consultant()
    {
        return $this->belongsTo(Consultant::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function information()
    {
        return $this->hasOne(Engineer_detail::class);
    }

    public function documents()
    {
        return $this->hasMany(Engineer_document::class);
    }

//    public function type()
//    {
//        return $this->hasOne(Engineer_type::class);
//    }

//    public function roles()
//    {
//        return $this->hasManyThrough(Eng_role::class, Engineer_type::class);
//    }
}
