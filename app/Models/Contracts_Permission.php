<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contracts_Permission extends Model
{
    protected $fillable = [
        'permission_id', 'information', 'schedule', 'submittals', 'quantities', 'requests', 'changing_orders', 'correspondence', 'tenders_drawings', 'shop_drawings'
        , 'cordnation_drawings', 'tools', 'tests', 'reports', 'video', 'letters',
    ];
    protected $table = 'contracts_permissions';
}
