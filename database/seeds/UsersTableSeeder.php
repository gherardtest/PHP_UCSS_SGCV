<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        //Administrador
        User::create([
          'name' => 'Administrador',
          'email' => 'admin@mayorista.pe',
          'password' => bcrypt('123456789'),
          'role' => 0
        ]);

        //Jefe de Compras
        User::create([
          'name' => 'Jefe de Compras',
          'email' => 'jcompras@mayorista.pe',
          'password' => bcrypt('123456789'),
          'role' => 1
        ]);

        //Auxiliar de Compras
        User::create([
          'name' => 'Auxiliar de Compras',
          'email' => 'acompras@mayorista.pe',
          'password' => bcrypt('123456789'),
          'role' => 2
        ]);

        //Auxiliar de Almacén
        User::create([
          'name' => 'Auxiliar de Almacén',
          'email' => 'aalmacen@mayorista.pe',
          'password' => bcrypt('123456789'),
          'role' => 3
        ]);

        //Jefe de Ventas
        User::create([
          'name' => 'Jefe de Ventas',
          'email' => 'jventas@mayorista.pe',
          'password' => bcrypt('123456789'),
          'role' => 4
        ]);

        //Ejecutivo de Ventas
        User::create([
          'name' => 'Ejecutivo de Ventas',
          'email' => 'eventas@mayorista.pe',
          'password' => bcrypt('123456789'),
          'role' => 5
        ]);

        //Cajero
        User::create([
          'name' => 'Cajero',
          'email' => 'cajero@mayorista.pe',
          'password' => bcrypt('123456789'),
          'role' => 6
        ]);

        //Encargado de Transportes
        User::create([
          'name' => 'Encargado de Transportes',
          'email' => 'etransporte@mayorista.pe',
          'password' => bcrypt('123456789'),
          'role' => 7
        ]);

        //Recepcionista
        User::create([
          'name' => 'Recepcionista',
          'email' => 'recepcionista@mayorista.pe',
          'password' => bcrypt('123456789'),
          'role' => 8
        ]);
    }
}
