<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectLetters extends Model
{
    protected $table = "project_letters";
    protected $fillable = ['project_id', 'sort', 'specific', 'receiver', 'number', 'related_item', 'date', 'description', 'document'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
