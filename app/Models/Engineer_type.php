<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Engineer_type extends Model
{
    protected $fillable = ['type', 'engineer_id'];

    public function engineer()
    {
        return $this->belongsTo(Engineer::class);
    }
    public function roles(){
        return $this->hasMany(Eng_role::class,'engineer_type_id');
    }
}
