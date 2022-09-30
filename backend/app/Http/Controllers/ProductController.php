<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {

        return Product::select(
            'products.id', 
            'products.product_name', 
            'products.product_image',
            'products.price', 
            'product_descriptions.description'
            )
            ->join('product_descriptions', 'product_descriptions.product_id', '=', 'products.id')
            ->get();
    }
}
