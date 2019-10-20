<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    public function servicio(){
        return $this->hasMany('App\Servicio');
    }
    public function mercancia(){
        return $this->hasMany('App\Mercancia');
    }
}
