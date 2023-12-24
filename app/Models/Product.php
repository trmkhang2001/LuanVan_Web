<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'sku',
        'img',
        'name',
        'description',
        'price',
        'id_bh',
        'quantity',
        'status',
        'id_category',
        'id_supploer',
    ];
}
