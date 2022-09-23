<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_item = OrderItem::create([
            'quantity' => 1,
            'unit_price' => 23.66,
            'total_price' => 23.66,
            'observation' => ''
        ]);

        $order_item->product->create([
            'product_name' => 'Fechadura banheiro abitare 40mm - AROUCA - 2025/40 zc', 
            'product_image' => Str::random(10),
            'price' => 23.66,
        ]);
    }
}
