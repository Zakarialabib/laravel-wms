<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
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
    ];

    public function sales()
    {
        return $this->belongsToMany(Sales::class);
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
