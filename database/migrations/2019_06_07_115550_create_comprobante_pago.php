<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprobantePago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobante_pago', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('nota_pedidos_id');
            $table->unsignedInteger('user_id');

            $table->integer('tipoComprobante');
            $table->double('totalPagado',8,2);
            $table->double('Vuelto',8,2);
            $table->timestamps();

            
        });
        Schema::table('comprobante_pago', function (Blueprint $table) {
            $table->foreign('nota_pedidos_id')->references('id')->on('nota_pedidos');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprobante_pago');
    }
}
