<?php

namespace App\Models;

use App\User;


class Consultant extends User
{
    protected $fillable = ['name', 'email', 'password', 'img', 'active','permission_id',];


    public function engineers()
    {
        return $this->hasMany(Engineer::class);
    }

    public function information()
    {
        return $this->hasOne(Consultant_detail::class);
    }

    public function documents()
    {
        return $this->hasMany(Consultant_document::class);
    }
}
