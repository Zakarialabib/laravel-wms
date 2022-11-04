<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
    private const STATUS_Processing = 1;
    private const STATUS_Shipping = 2;
    private const STATUS_Completed = 3;
    private const STATUS_Returned = 4;

    protected $fillable = [
        'id',
        'sale_id',
        'tracking_number',
        'recipient',
        'address',
        'phone',
        'price',
        'expected_arrival',
        'actual_arrival',
        'status',
        'description',
        'user_id'
    ];

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }

    public function products()
    {
        return $this->hasMany(Products::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
