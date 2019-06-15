<?php

use Illuminate\Database\Seeder;
use App\EstadoOrdenTransporte;

class EstadosOrdenTransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoOrdenTransporte::create([
            'descripcion' => 'Pendiente de emisión'
        ]);
        EstadoOrdenTransporte::create([
            'descripcion' => 'Emitido'
        ]);
        EstadoOrdenTransporte::create([
            'descripcion' => 'Mercancía enviada a transportista'
        ]);
        EstadoOrdenTransporte::create([
            'descripcion' => 'Entregado'
        ]);
        EstadoOrdenTransporte::create([
            'descripcion' => 'Anulado'
        ]);
        EstadoOrdenTransporte::create([
            'descripcion' => 'Siniestrado'
        ]);

//         Pendiente de emisión (Cuando se ha registrado la orden de transporte )
// - Emitido (Impreso y enviado)
// - Mercancía enviada a transportista
// - Entregado
// - Anulado
// - Siniestrado
  
    }
}
