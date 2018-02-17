<?php

namespace App\Models;

use App\User;


class Engineer extends User
{
    protected $fillable = ['type_id', 'contractor_id', 'consultant_id', 'owner_id', 'name', 'email', 'password', 'img'];

    public function contractor()
    {
        return $this->belongsTo(Contractor::class);
    }

    public function consultant()
    {
        return $this->belongsTo(Consultant::class);
    }
}
