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
            'product_name' => 'Vaso sanitário tipo italiano - porcelanato branco', 
            'product_image' => Str::random(10),
            'price' => 349.99,
        ]);

        $product->category()->create([
            'category_name' => 'Banheiro'
        ]);

        $product->product_description()->create([
            'description' => 'Vaso sanitário em porcelanato branco. Design italiano. Maior conforto e durabilidade.'
        ]);
    }
}
