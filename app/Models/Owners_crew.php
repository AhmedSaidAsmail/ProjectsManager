<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owners_crew extends Model
{
    protected $fillable = ['project_id', 'owner_engineer_id', 'owner_engineer_position'];

    public function engineer()
    {
        return $this->belongsTo(Engineer::class, 'owner_engineer_id');
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
