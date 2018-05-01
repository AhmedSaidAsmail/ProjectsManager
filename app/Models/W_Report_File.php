<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class W_Report_File extends Model
{
    protected $table = 'w_report_file';
    protected $fillable = ['report_id', 'file_id'];

    public function file()
    {
        return $this->belongsTo(Project_file::class, 'file_id');
    }
}
