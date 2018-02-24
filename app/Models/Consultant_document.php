<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant_document extends Model
{
    protected $fillable = ['consultant_id', 'document_type', 'document_file'];
}
