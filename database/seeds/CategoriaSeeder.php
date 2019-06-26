<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'descripcion' => 'Bebidas',          
            ]);
        Categoria::create([
            'descripcion' => 'Galletas',          
            ]);
        Categoria::create([
            'descripcion' => 'Golosinas',          
            ]);
        Categoria::create([
            'descripcion' => 'Snacks',          
            ]);
    }
}
