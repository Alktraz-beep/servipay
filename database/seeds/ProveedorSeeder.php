<?php

use App\Proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::create(
            [
                'nombre' => 'Ulises Mercado',
                'telefono' => 5532164904,
                'email' => 'ulisesmer@gmail.com',
                'es_activo' => true
            ]
        );
        Proveedor::create(
            [
                'nombre' => 'Miguel Francisco',
                'telefono' => 5519390782,
                'email' => 'miguel2003@gmail.com',
                'es_activo' => true
            ]
        );
        Proveedor::create(
            [
                'nombre' => 'Julio Jimnez',
                'telefono' => 5538402920,
                'email' => 'julionjim@gmail.com',
                'es_activo' => true
            ]
        );
    }
}
