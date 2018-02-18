<?php

namespace App\Models;

use App\User;

class Owner extends User
{
    protected $fillable = ['name', 'email', 'password'];

    public function engineers()
    {
        return $this->hasMany(Engineer::class);
    }
}
