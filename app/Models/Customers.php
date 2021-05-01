<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $guard = [ 'id',
    'name','phone','email','address','status'
];


public function sale()
{
    return $this->hasMany(Sale::class);
}

}
