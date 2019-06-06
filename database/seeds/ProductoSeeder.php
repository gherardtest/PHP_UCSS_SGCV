<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'descripcion' => 'Gaseosa 1L',
            'categoria_id' => 1,
            'precio' => 3.50,
            'unidadMedida' => 'Litros',
            'stock' => 50
            ]);
        Producto::create([
            'descripcion' => 'Galletas San Jorge x 6',
            'categoria_id' => 2,
            'precio' => 2.50,
            'unidadMedida' => 'Unidad',
            'stock' => 50
            ]);
    }
}
