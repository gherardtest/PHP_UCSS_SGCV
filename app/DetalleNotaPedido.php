<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleNotaPedido extends Model
{
    //
    protected $table = 'nota_pedidos_detalles';
    protected $fillable = ['producto_id','nota_pedido_id','cantidad', 'subtotal'];
  
}
