<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    private const STATUS_Pending = 1;
    private const STATUS_Processing = 2;
    private const STATUS_Completed = 3;
    private const STATUS_Decline = 4;

    protected $fillable = [
        'id',
        'status',
        'quantity',
        'sale_number',
        'product_id',
        'grand_total',
        'user_id',
        'message_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'user_id');
    }

    public function products()
    {
        return $this->hasMany(Products::class,'product_id','id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function delivery()
    {
        return $this->hasMany(Deliveries::class,'deliveries_id');
    }
}
