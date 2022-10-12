<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show() {
        $order = Order::all();

        return $order;
    }

    public function store(Request $request) {
        $order = Order::create($request->all());

        return $order;
    }
}
