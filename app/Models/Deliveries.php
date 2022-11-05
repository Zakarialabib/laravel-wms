<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
    public const STATUS_PROCESSING = 1;
    public const STATUS_SHIPPING = 2;
    public const STATUS_COMPLETED = 3;
    public const STATUS_RETURNED = 4;

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
