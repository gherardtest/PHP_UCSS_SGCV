<?php

use Illuminate\Database\Seeder;
use App\NotaPedido;

class NotaPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        NotaPedido::create([
            'customer_id' => 1,
            'user_id' => 6,
            'fecha_emision' => '2019-06-07 12:47:07',
            'igv' => 18.00,
            'total' => 100.00,
            'estadoNotaPedido' => 1,
            'transporte' => 0.00
        ]);
        NotaPedido::create([
            'customer_id' => 2,
            'user_id' => 6,
            'fecha_emision' => '2019-06-07 15:47:07',
            'igv' => 36.00,
            'total' => 200.00,
            'estadoNotaPedido' => 1,
            'transporte' => 0.00
        ]);
    }
}
