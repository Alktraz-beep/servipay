<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente_Servicio extends Model
{
    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
    public function servicio(){
        return $this->belongsTo('App\Servicio');
    }
}
