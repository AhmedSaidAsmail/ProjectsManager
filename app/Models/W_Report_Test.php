<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class W_Report_Test extends Model
{
    protected $table = 'w_report_tests';
    protected $fillable = ['report_id', 'test_id'];

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }
}
