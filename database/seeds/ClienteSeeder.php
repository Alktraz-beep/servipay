<?php

use App\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create(
            [
                'nombre' => 'Andres Marqueda',
                'telefono' => 9452323021,
                'email' => 'andresmes@gmail.com',
                'es_activo' => true
            ]
        );
        Cliente::create(
            [
                'nombre' => 'Mario Molina',
                'telefono' => 2134230191,
                'email' => 'mariopremios@gmail.com',
                'es_activo' => true
            ]
        );
    }
}
