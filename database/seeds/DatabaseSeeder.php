<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SucursalSeeder::class);
        $this->call(MercanciaSeeder::class);
        $this->call(ServicioSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ProveedorSeeder::class);
        /*Poblando tablas intermedias*/
        $this->call(SucursalProveedorSeeder::class);
        $this->call(ClienteServicioSeeder::class);
    }
}
