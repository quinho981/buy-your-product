<?php

namespace Database\Seeders;

use App\Models\ProductDescription;
use Illuminate\Database\Seeder;

class ProductDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductDescription::create([
            'description' => 'Vaso sanitário em porcelanato branco. Design italiano. Maior conforto e durabilidade. '
        ]);
    }
}
