<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{

    protected $fillable = [
        'status',
        'product_id',
        'sale_id',   
        'user_id'     
    ];
    
    public function user()
    {
        return $this->BelongsTo(Users::class);
    }

    public function sale()
    {
        return $this->HasMany(Sales::class);
    }

    public function products()
    {
        return $this->HasMany(Products::class);
    }

}
