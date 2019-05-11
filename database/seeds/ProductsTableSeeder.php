<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        'description' => 'Gaseosa 1L',
        'category' => 'Bebidas',
        'cant' => 40,
        'price' => 3.50,
        'unit_measurement' => 'Litros'
        ]);

        Product::create([
        'description' => 'Ace',
        'category' => 'Detergente',
        'cant' => 100,
        'price' => 2.50,
        'unit_measurement' => 'Kg'
        ]);

        Product::create([
        'description' => 'Jamonada',
        'category' => 'Embutidos',
        'cant' => 40,
        'price' => 1.50,
        'unit_measurement' => 'Kg'
        ]);
    }
}
