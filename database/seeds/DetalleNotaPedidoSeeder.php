<?php

use Illuminate\Database\Seeder;
use App\DetalleNotaPedido;

class DetalleNotaPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DetalleNotaPedido::create([
            'producto_id' => 2,
            'nota_pedido_id' => 1,
            'cantidad' => 40,
            'subtotal' => 100.00
        ]);
        DetalleNotaPedido::create([
            'producto_id' => 2,
            'nota_pedido_id' => 2,
            'cantidad' => 80,
            'subtotal' => 200.00
        ]);
    }
}
