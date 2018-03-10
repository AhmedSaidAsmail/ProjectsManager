<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project_document extends Model
{
    protected $fillable = ['project_id', 'document_type', 'document_file'];
}
