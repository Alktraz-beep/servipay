<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function showAll(){
        return view('cliente.mostrarclientes');
    }
}
