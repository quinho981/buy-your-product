<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'product_name' => 'Porta de abrir veneziana ventilada branco 2.16x0.88x5.4 direita alumifort alumifort - SASAZAKI   ', 
            'product_image' => Str::random(10),
            'price' => 2365.50,
        ]);

        $product->category()->create([
            'category_name' => 'Portas e janelas'
        ]);

        $product->product_description()->create([
            'description' => 'Variedade de modelos e medidas em produtos de alumínio. Medida (alt x larg x bat) / Abertura: 216 x 88 x 5,4 (cm) x Direita'
        ]);

        // $product->order_item()->create([
        //     'product_id' => $product->id,
        //     'quantity' => 1,
        //     'unit_price' => 878.75,
        //     'total_price' => 878.75,
        //     'observation' => ''
        // ]);
    }
}
