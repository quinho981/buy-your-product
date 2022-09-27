<?php

namespace App\Http\Controllers;

use App\Models\ProductDescription;
use Illuminate\Http\Request;

class ProductDescriptionController extends Controller
{
    public function show() {
        $product_description = ProductDescription::all();

        return $product_description;
    }
}
