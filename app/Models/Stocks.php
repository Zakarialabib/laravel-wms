<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    protected $fillable = [
        'id',
        'product_id',
        'quantity',
        'user_id',
    ];

    public function products()
    {
        return $this->belongToMany(Products::class, 'product_id', 'id');
    }


}
