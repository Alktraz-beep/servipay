<?php

use App\Sucursal_Proveedor;
use Illuminate\Database\Seeder;

class SucursalProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sucursal_Proveedor::create(
            [
                'sucursal_id' => 2,
                'proveedor_id' => 1
            ]
        );
        Sucursal_Proveedor::create(
            [
                'sucursal_id' => 1,
                'proveedor_id' => 3
            ]
        );
    }
}
