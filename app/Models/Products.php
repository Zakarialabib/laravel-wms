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
        'user_id'  
    ];
    
    public function sale()
    {
        return $this->belongsToMany(Sale::class , 'sale_id' , 'id');
    }

    public function stocks()
    {
        return $this->belongsTo(Stocks::class);
    }

    public function stores()
    {
        return $this->belongsTo(Stores::class ,'store_id' , 'id');
    }

}
