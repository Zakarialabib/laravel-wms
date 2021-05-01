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
        return $this->belongsToMany(Sales::class , 'sale_id' , 'id');
    }

    public function stocks()
    {
        return $this->belongsToMany(Stocks::class, 'stock_id' , 'id');
    }

    public function stores()
    {
        return $this->belongsTo(Stores::class ,'store_id' , 'id');
    }

}
