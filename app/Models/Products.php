<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'category_name',
        'product_image',
        'price',
        'description',
        'status'
    ];

    protected $hidden = [];

    protected $dates = ['deleted_at'];
}
