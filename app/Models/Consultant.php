<?php

namespace App\Models;

use App\User;


class Consultant extends User
{
    protected $fillable = ['name', 'email', 'password', 'img'];

    public function details()
    {
        return $this->hasOne(Consultant_detail::class);
    }

    public function engineers()
    {
        return $this->hasMany(Engineer::class);
    }
}
