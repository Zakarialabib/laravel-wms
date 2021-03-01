<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';
    protected $fillable = [
    'name','phone','email','address',
];

public function sale()
{
    return $this->hasMany(Sale::class);
}

}
