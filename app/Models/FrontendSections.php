<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendSections extends Model
{
    use HasFactory;

    const STATUS_ACTIF = 1;
    const STATUS_INACTIF = 2; 

    protected $fillable = [ 'offer_title','offer_subtitle','offer_image',
    'service_title','service_subtitle','service_image','contact_title',
    'contact_subtitle','blog_title','blog_subtitle','blog_image','section_type','status' ];
}
