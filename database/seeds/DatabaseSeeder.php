<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ProductoSeeder::class);
       // $this->call(ProductsTableSeeder::class);

        $this->call(NotaPedidoSeeder::class);
        $this->call(DetalleNotaPedidoSeeder::class);

        $this->call(EstadosOrdenTransporteSeeder::class);
    }
}
