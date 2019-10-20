<?php

use App\Cliente_Servicio;
use Illuminate\Database\Seeder;

class ClienteServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente_Servicio::create(
          [
              'cliente_id' => 1,
              'servicio_id' => 1
          ]
        );
        Cliente_Servicio::create(
            [
                'cliente_id' => 2,
                'servicio_id' => 5
            ]
        );
    }
}
