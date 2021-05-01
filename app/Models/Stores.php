<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{

    protected $fillable = [
        'company_name',
        'balance',
        'status',
        'user_id' ,
    ];
    
    public function user()
    {
        return $this->BelongsTo(User::class ,'user_id' , 'id');
    }

    public function sale()
    {
        return $this->HasMany(Sales::class ,'sale_id' , 'id');
    }

    public function products()
    {
        return $this->HasMany(Products::class, 'product_id' , 'id');
    }

}
