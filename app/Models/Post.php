<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Post extends Model

{
    use HasFactory;
 
    protected $fillable = [
        'title', 'body','slug', 'image', 'meta_description', 'meta_keyword' ,'image'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

}