<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    protected $fillable = [
        'id',
        'product_id',
        'quantity',
        'category_id',
        'unit_id',
    ];
}
