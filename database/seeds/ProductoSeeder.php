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
            'descripcion' => 'Gaseosa Pepsi 1L',
            'categoria_id' => 1,
            'precio' => 3.50,
            'unidadMedida' => 'Litros',
            'stock' => 50
        ]);
        Producto::create([
            'descripcion' => 'Gaseosa Inca Kola 500ml',
            'categoria_id' => 1,
            'precio' => 15.50,
            'unidadMedida' => 'Pack de 12',
            'stock' => 50
        ]);
        Producto::create([
            'descripcion' => 'Gaseosa Peru Cola 500ml',
            'categoria_id' => 1,
            'precio' => 13.50,
            'unidadMedida' => 'Pack de 12',
            'stock' => 50
        ]);
        Producto::create([
            'descripcion' => 'Galletas San Jorge x 6',
            'categoria_id' => 2,
            'precio' => 2.50,
            'unidadMedida' => 'Unidad',
            'stock' => 50
        ]);
        Producto::create([
            'descripcion' => 'Doritos x 12',
            'categoria_id' => 4,
            'precio' => 6.00,
            'unidadMedida' => 'Tira de 12',
            'stock' => 50
        ]);
        Producto::create([
            'descripcion' => 'Lays x 12',
            'categoria_id' => 2,
            'precio' => 6.00,
            'unidadMedida' => 'Tira de 12',
            'stock' => 50
        ]);
        Producto::create([
            'descripcion' => 'Full Fresa x 20',
            'categoria_id' => 3,
            'precio' => 2.50,
            'unidadMedida' => 'Caja',
            'stock' => 50
        ]);
        Producto::create([
            'descripcion' => 'Halls Negro x 50',
            'categoria_id' => 3,
            'precio' => 2.50,
            'unidadMedida' => 'Bolsa de 50',
            'stock' => 50
        ]);

    }
}
