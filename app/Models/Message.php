<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    private const STATUS_Pending = 1;
    private const STATUS_Processing = 2;
    private const STATUS_Completed = 3;
    private const STATUS_Decline = 4;

    protected $fillable = [
        'sale_id',
        'user_id',
        'file',
        'status',
        'message',
    ];

    public function sale()
    {
    	return $this->belongsTo(Sale::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
}
