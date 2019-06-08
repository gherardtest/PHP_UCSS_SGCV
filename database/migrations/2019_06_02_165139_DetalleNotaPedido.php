<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleNotaPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_pedidos_detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('nota_pedido_id');
            $table->integer('cantidad');
            $table->double('subtotal',8,2);
            
            $table->timestamps();
        });

        Schema::table('nota_pedidos_detalles', function (Blueprint $table) {
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('nota_pedido_id')->references('id')->on('nota_pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
