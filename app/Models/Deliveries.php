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

    public function sale()
    {
        return $this->hasMany(Sales::class);
    }
}
