<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['id','description','categoria_id', 'stock','precio','unidadMedida'];
  
}
