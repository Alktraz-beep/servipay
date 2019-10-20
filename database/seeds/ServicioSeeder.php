<?php

use App\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create(
            [
                'nombre' => 'Reparación de la Red de datos',
                'es_activo' => true,
                'sucursal_id' => 2
            ]
        );
        Servicio::create(
            [
                'nombre' => 'Mantenimiento de la Red de datos',
                'es_activo' => true,
                'sucursal_id' => 1
            ]
        );
        Servicio::create(
            [
                'nombre' => 'Mantenimiento de terminal punto',
                'es_activo' => true,
                'sucursal_id' => 3
            ]
        );
        Servicio::create(
            [
                'nombre' => 'Reparación de terminal punto',
                'es_activo' => true,
                'sucursal_id' => 1
            ]
        );
        Servicio::create(
            [
                'nombre' => 'Mantenimiento de terminal punto',
                'es_activo' => true,
                'sucursal_id' => 4
            ]
        );
        Servicio::create(
            [
                'nombre' => 'Mantenimiento de terminal punto',
                'es_activo' => true,
                'sucursal_id' => 5
            ]
        );
        Servicio::create(
            [
                'nombre' => 'Balance de ingresos por terminal punto',
                'es_activo' => true,
                'sucursal_id' => 2
            ]
        );
    }
}
