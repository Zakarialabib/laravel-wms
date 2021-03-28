<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $guarded = [];

    const METHOD_CASH = 1;
    const METHOD_CHECK = 2;
    const METHOD_DEPOSIT = 3;

    const STATUS_DUE = 1;
    const STATUS_PAID = 2; 
    const STATUS_PENDING = 3;
    const STATUS_PARTIAL = 4;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor', 'user_id', 'id');
    }

}
