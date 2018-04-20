<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name'];

    public function contractorPermissions()
    {
        return $this->hasOne(Contracts_Permission::class);
    }
}
