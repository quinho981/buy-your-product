<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function getAllItems() {
        $order_item = OrderItem::all();

        return $order_item;
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'product_id' => 'required',
            'order_id' => 'nullable',
            'quantity' => 'bail|required|min:1',
            'unit_price' => 'required',
            'total_price' => 'required',
            'observation' => 'nullable'
        ]);

        $order_item = OrderItem::create(
            $validated
        );

        return $order_item;
    }
}
