<?php

use Illuminate\Database\Seeder;
use App\Servicio;

class ServicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicio = new Servicio;
        $servicio->nombre = 'Algun servicio';
        $servicio->descripcion = 'Alguna descripciom';
        $servicio->costo = '500';
        $servicio->created_at = '2021-11-15';
        $servicio->save();
    }
}
