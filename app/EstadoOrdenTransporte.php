<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoOrdenTransporte extends Model
{
    protected $table = 'estados_ord_trans';
    protected $fillable = ['id','descripcion'];
  
}
