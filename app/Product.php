<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['id','description','category', 'cant','price','unit_measurement'];
}
