<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $guarded = [];

    private const METHOD_CASH = 1;
    private const METHOD_CHECK = 2;
    private const METHOD_DEPOSIT = 3;

    private const STATUS_DUE = 1;
    private const STATUS_PAID = 2;
    private const STATUS_PENDING = 3;
    private const STATUS_PARTIAL = 4;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
