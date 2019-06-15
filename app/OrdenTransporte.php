<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenTransporte extends Model
{
    //
    protected $table = 'Orden_Transporte';
    protected $fillable = ['id','nota_pedidos_id','user_id','customer_id','estados_ord_trans_id',
    'fecha_envio','hora_envio','direccion_envio','contacto_ref','telef_contacto_ref','precio'];   
}
