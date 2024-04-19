<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'brand_id',
        'category_id',
        'name',
        'description',
        'price',
        'quantity',
    ];

    public $timestamps = true;
}
