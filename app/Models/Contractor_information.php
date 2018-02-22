<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contractor_information extends Model
{
    protected $fillable = [
        'address', 'phone', 'phone2', 'emergency_phone'
    ];
}
