<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function show() {
        $order_item = OrderItem::all();

        return $order_item;
    }

    public function store(Request $request) {
        //$novo = $request->input('observation');

        $validated = $request->validate([
            'product_id' => 'required',
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
