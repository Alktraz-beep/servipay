<?php

use App\Sucursal;
use Illuminate\Database\Seeder;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sucursal::create(
            [
                'nombre' => 'Universidad',
                'direccion' => 'Av. cerro del agua, Ciudad Univesidaria, CDMX',
                'es_activo' => true
            ]
        );
        Sucursal::create(
            [
                'nombre' => 'Copilco',
                'direccion' => 'Avenida siempre viva núm. 34 Copilco CDMX',
                'es_activo' => true
            ]
        );
        Sucursal::create(
            [
                'nombre' => 'Iztapalapa',
                'direccion' => 'Calle de la muerte núm. 5 Tezonco Iztapalapa',
                'es_activo' => true
            ]
        );
        Sucursal::create(
            [
                'nombre' => 'Nezahualcoyotl',
                'direccion' => 'Calle de la vida num. 66 Nezahualcoyotl',
                'es_activo' => true
            ]
        );
        Sucursal::create(
            [
                'nombre' => 'Chalco',
                'direccion' => 'Calle de la bruja num. 12 Chalco Edo. Mex',
                'es_activo' => true
            ]
        );
    }
}
