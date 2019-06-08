<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComprobantePago extends Model
{
    //
    protected $table= 'comprobante_pago';
    protected $fillable = ['id','nota_pedidos_id','user_id','tipoComprobante', 'totalPagado','Vuelto'];
   
}
