<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProductModel extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_name',
        'product_brand',
        'category_id',
        'product_price',
        'description',
        'product_Img_1',
        'product_Img_2',
        'product_Img_3',
    ];
}
