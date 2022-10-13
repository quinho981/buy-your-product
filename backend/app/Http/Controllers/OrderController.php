<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getOrders() {

        return Order::all();
    }

    public function getItemsByOrder($id) {
        
        return OrderItem::where('order_id', $id)->get();
    }

    public function store(Request $request) {

        return Order::create($request->all());
    }
}
