<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleRequerimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_requerimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('requerimiento_id');
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad');
            $table->string('detalle');


            $table->timestamps();
        });

        Schema::table('detalle_requerimientos', function (Blueprint $table) {
            $table->foreign('requerimiento_id')->references('id')->on('requerimientos');
            $table->foreign('producto_id')->references('id')->on('productos');
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
