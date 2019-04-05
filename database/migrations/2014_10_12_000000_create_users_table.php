<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->smallInteger('role');
            //0: Administrador
            //1: Jefe de Compras
            //2: Auxiliar de Compras
            //3: Auxiliar de Almacen
            //4: Jefe de Ventas
            //5: Ejecutivo de Ventas
            //6: Cajero
            //7: Encargado de Transportes
            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
