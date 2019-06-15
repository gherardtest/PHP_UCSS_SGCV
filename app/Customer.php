<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['nrodoc','tipodoc','nameCustomer','email','phone'];
  
    public function scopeSearch($query,$name){
        return $query->where('name','LIKE',"%$name%");
    }

}
