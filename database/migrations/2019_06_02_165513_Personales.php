<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Personales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cargo_id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('correo');
            $table->integer('dni');
            $table->integer('telefono');
            $table->string('direccion');

            $table->timestamps();
        });

        Schema::table('personales', function (Blueprint $table) {
            $table->foreign('cargo_id')->references('id')->on('cargos');
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
