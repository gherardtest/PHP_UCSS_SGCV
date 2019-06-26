<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenTransporte extends Model
{
    //
    protected $table = 'orden_Transporte';
    protected $fillable = ['id','nota_pedidos_id','user_id','customer_id','estados_ot_id',
    'fecha_envio','horario_envio','direccion_envio','contacto_ref','telef_contacto_ref','precio'];   
}
