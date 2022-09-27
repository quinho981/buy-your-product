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
            'product_name' => 'Bacia caixa acoplada fit plus branca + ASSENTO – CELITE', 
            'product_image' => Str::random(10),
            'price' => 878.75,
        ]);

        $product->category()->create([
            'category_name' => 'Banheiro'
        ]);

        $product->product_description()->create([
            'description' => 'Bacia para caixa acoplada fit plus branca. Caixa acoplada 3 e 6 litros fit plus branco. Assento polipropileno fit branco.'
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
