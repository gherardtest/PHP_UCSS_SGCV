<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipo_cliente_id');
            $table->integer('documento');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('correo');

            $table->timestamps();
        });

        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign('tipo_cliente_id')->references('id')->on('cliente_tipos');
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
