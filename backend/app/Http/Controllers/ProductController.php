<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts() {

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

    public function getProduct($id) {

        return Product::select(
            'products.id', 
            'products.product_name', 
            'products.product_image',
            'products.price', 
            'product_descriptions.description'
            )
            ->join('product_descriptions', 'product_descriptions.product_id', '=', 'products.id')
            ->where('products.id', $id)
            ->get();
    }
}
