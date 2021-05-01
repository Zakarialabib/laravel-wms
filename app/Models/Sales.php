<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
        'id',
        'status',
        'quantity'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'user_id');
    }

    public function product()
    {
        return $this->hasMany(Products::class,'product_id');
    }

    public function items()
    {
        return $this->belongsToMany(Product::class,'sale_items','sale_id','product_id')->withPivot('quantity','price');
    }

    public function delivery()
    {
        return $this->hasMany(Deliveries::class,'deliveries_id');
    }
}
