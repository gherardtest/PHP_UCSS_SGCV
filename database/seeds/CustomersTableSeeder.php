<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Customer::create([
          'dni' => 72930812,
          'name' => 'Gherard Chipana',
          'address' => 'Los Olivos',
          'phone' => 987376717
          ]);

          Customer::create([
          'dni' => 11456987896,
          'name' => 'Waposat S.A.C.',
          'address' => 'Rímac',
          'phone' => 984756236
          ]);

          Customer::create([
          'dni' => 78562489,
          'name' => 'Junior Linares',
          'address' => 'Comas',
          'phone' => 963258741
          ]);

          Customer::create([
          'dni' => 11547823651,
          'name' => 'ROBSO S.A.',
          'address' => 'San Isidro',
          'phone' => 954785632
          ]);

          Customer::create([
          'dni' => 741258963,
          'name' => 'Edgar Flores',
          'address' => 'Puente Piedra',
          'phone' => 974125896
          ]);
    }
}
