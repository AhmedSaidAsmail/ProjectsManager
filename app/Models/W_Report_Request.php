<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class W_Report_Request extends Model
{
    protected $table = 'w_report_request';
    protected $fillable = ['report_id', 'request_id'];

    public function request()
    {
        return $this->belongsTo(Request::class, 'request_id');
    }
}
