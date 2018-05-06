<?php

namespace App\Models;

use App\User;

class Owner extends User
{
    protected $fillable = ['name', 'email', 'password', 'permission_id','active'];

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
}
