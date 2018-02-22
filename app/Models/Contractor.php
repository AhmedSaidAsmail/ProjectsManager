<?php

namespace App\Models;

use App\User;

class Contractor extends User
{
    protected $fillable = ['name', 'email', 'password'];

    public function engineers()
    {
        return $this->hasMany(Engineer::class);
    }

    public function information()
    {
        return $this->hasOne(Contractor_information::class);
    }

    public function documents()
    {
        return $this->hasMany(Contractor_document::class);
    }
}
