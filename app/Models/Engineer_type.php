<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Engineer_type extends Model
{
    protected $fillable = ['type'];

    public function engineer()
    {
        return $this->hasMany(Engineer::class);
    }
    public function roles(){
        return $this->hasOne(Eng_role::class,'engineer_type_id');
    }
    public function delete(){
        $this->roles()->delete();
        return Parent::delete();
    }
}
