<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebpageToImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'img_name',
        'saved_img_url',
        'web_page_url'
    ];
}
