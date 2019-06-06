<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SolicitudProformas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_proformas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('requerimiento_id');
            $table->unsignedBigInteger('cotizacion_id');
            $table->integer('numero_cotizaciones');

            $table->timestamps();
        });

        Schema::table('solicitud_proformas', function (Blueprint $table) {
            $table->foreign('requerimiento_id')->references('id')->on('requerimientos');
            $table->foreign('cotizacion_id')->references('id')->on('cotizaciones');
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
