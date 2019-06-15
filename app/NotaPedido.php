<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaPedido extends Model
{
    //
    protected $table = 'nota_pedidos';
    protected $fillable = ['id','customer_id','user_id','fecha_emision','igv', 'total','transporte','estadoNotaPedido'];

}
