<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Engineer_document extends Model
{
    protected $fillable = ['engineer_id', 'document_type', 'document_file'];
}
