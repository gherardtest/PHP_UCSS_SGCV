<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdenTransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orden_Transporte', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedBigInteger('nota_pedidos_id');
            $table->unsignedInteger('estados_ot_id');

            $table->date('fecha_envio');
            $table->dateTime('hora_envio');
            $table->string('direccion_envio');
            $table->string('contacto_ref');
            $table->string('telef_contacto_ref');
            $table->double('precio',5,2);
        });
        Schema::table('Orden_Transporte', function (Blueprint $table) {
            $table->foreign('nota_pedidos_id')->references('id')->on('nota_pedidos');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('estados_ot_id')->references('id')->on('estados_ord_trans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Orden_Transporte');
    }
}
