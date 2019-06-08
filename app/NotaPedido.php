<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaPedido extends Model
{
    //
    protected $table = 'nota_pedidos';
    protected $fillable = ['id','cliente_id','fecha_emision','igv', 'total','estadoNotaPedido'];

}
