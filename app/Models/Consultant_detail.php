<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant_detail extends Model
{
    protected $fillable = ['consultant_id', 'address', 'location', 'logo', 'phone', 'mobile', 'website'];
}
