<?php

namespace App\Models;

use App\User;

class Contractor extends User
{
    protected $fillable = ['name', 'email', 'password', 'active', 'permission_id',];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function project($id)
    {
        return $this->projects()->where('id', $id)->first();
    }

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
