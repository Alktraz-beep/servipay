<?php

use App\Mercancia;
use Illuminate\Database\Seeder;

class MercanciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mercancia::create(
            [
                'clave' => 'MARU1694',
                'nombre' => 'Terminal punto',
                'num_productos' => 20,
                'sucursal_id' => 1
            ]
        );
        Mercancia::create(
            [
                'clave' => 'CASA1474',
                'nombre' => 'Cable UTP categoria 5',
                'num_productos' => 100,
                'sucursal_id' => 1
            ]
        );
    }
}
