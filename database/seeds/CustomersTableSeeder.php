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
          'nrodoc' => 74581265,
          'tipodoc' => 1,
          'name' => 'Gherard Chipana',
          
          'phone' => 987376717,
          'email' => 'gchipana@gmail.com'
          ]);

          Customer::create([
          'nrodoc' => 11456987896,
          'tipodoc' => 2,
          'name' => 'Waposat S.A.C.',
          
          'phone' => 984756236,
          'email' => 'waposat@gmail.com'
          ]);

          Customer::create([
          'nrodoc' => 78945612,
          'tipodoc' => 1,
          'name' => 'Junior Linares',
          
          'phone' => 963258741,
          'email' => 'jlinares@gmail.com'
          ]);

          Customer::create([
          'nrodoc' => 11547823651,
          'tipodoc' => 2,
          'name' => 'ROBSO S.A.',
          
          'phone' => 954785632,
          'email' => 'robso@gmail.com'
          ]);

          Customer::create([
          'nrodoc' => 75412896,
          'tipodoc' => 1,
          'name' => 'Edgar Flores',
          
          'phone' => 974125896,
          'email' => 'eflores@gmail.com'
          ]);
    }
}
