<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mercancia extends Model
{
    public function sucursal(){
        return $this->belongsTo('App\Sucursal');
    }
}
