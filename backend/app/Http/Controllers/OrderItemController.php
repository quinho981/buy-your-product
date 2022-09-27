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
}
