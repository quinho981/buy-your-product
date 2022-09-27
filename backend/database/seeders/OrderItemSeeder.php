<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use App\Models\Product;
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
        // $product = Product::create([
        //     'product_name' => 'JANELA MAXIM-AR ALUMINIUM SEM GRADE VIDRO MINI BOREAL', 
        //     'product_image' => Str::random(10),
        //     'price' => 303.49,
        // ]);

        // $product->order_item()->create([
        //     'product_id' => $product->id,
        //     'quantity' => 1,
        //     'unit_price' => 303.49,
        //     'total_price' => 303.49,
        //     'observation' => ''
        // ]);
    }
}
