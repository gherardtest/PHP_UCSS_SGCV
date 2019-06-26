<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = ['id','nombre','ruc','contacto','cargoContacto','telefono','direccion'];
    
}
