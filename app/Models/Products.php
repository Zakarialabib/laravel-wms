<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'id',
        'name',
        'price',
        'description',        
    ];
    
    public function sale()
    {
        return $this->belongsToMany(Sales::class);
    }

    public function stocks()
    {
        return $this->belongsToMany(Products::class);
    }

}
