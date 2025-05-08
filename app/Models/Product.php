<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'ArticleNumber',
        'color',
        'size',
        'category',
        'company',
        'QTY',
        'price',
        'image'
    ];

    
}
