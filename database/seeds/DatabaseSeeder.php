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
<<<<<<< HEAD
         $this->call(RolesAndPermissionsTableSeeder::class);
         $this->call(UsuariosTableSeeder::class);
         $this->call(ViviendaTableSeeder::class);
         $this->call(ServicioTableSeeder::class);
=======
        $this->call(RolesAndPermissionsTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(ViviendaTableSeeder::class);
>>>>>>> 5448bd1ebc8986cdb2d0769fdd73b2f8aa7eaaa5
    }
}
