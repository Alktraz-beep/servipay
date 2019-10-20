<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal_Proveedor extends Model
{
    public function proveedor(){
        return $this->belongsTo('App\Proveedor');
    }
    public function sucursal(){
        return $this->belongsTo('App\Sucursal');
    }
}
