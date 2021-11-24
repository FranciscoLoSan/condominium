<?php

use Illuminate\Database\Seeder;
use App\Vivienda;
class ViviendaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        //
        $vivienda = new Vivienda;
        $vivienda->numero = '423';
        $vivienda->domicilio = 'Titanio, miramar. Zaponpan, Jal.';
        $vivienda->descripcion = 'Casa con 6 habitaciones y dos baños (tiene tres plantas).';
        $vivienda->user_id = '2';
        $vivienda->save();

        $vivienda = new Vivienda;
        $vivienda->numero = '418';
        $vivienda->domicilio = 'Titanio, miramar. Zaponpan, Jal.';
        $vivienda->descripcion = 'Casa bien posicionada con todos los servicios y comodidades.';
        $vivienda->user_id = '3';
        $vivienda->save();

        $vivienda = new Vivienda;
        $vivienda->numero = '420';
        $vivienda->domicilio = 'Titanio, miramar. Zaponpan, Jal.';
        $vivienda->descripcion = 'Instalación de tubería para acceso a agua potable.';
        $vivienda->user_id = '4';
        $vivienda->save();

        $vivienda = new Vivienda;
        $vivienda->numero = '419';
        $vivienda->domicilio = 'Titanio, miramar. Zaponpan, Jal.';
        $vivienda->descripcion = 'Fachada increible y minimalista. Cuenta con 3 cuartos';
        $vivienda->user_id = '5';
        $vivienda->save();

        $vivienda = new Vivienda;
        $vivienda->numero = '417';
        $vivienda->domicilio = 'Titanio, miramar. Zaponpan, Jal.';
        $vivienda->descripcion = 'Casa en la esquina que tiene dos planta, cada una con 2 cuartos y un baño';
        $vivienda->user_id = '6';
        $vivienda->save();

        $vivienda = new Vivienda;
        $vivienda->numero = '421';
        $vivienda->domicilio = 'Titanio, miramar. Zaponpan, Jal.';
        $vivienda->descripcion = 'Casa con fachada roja. Tine cochera para dos carros';
        $vivienda->user_id = '7';
        $vivienda->save();

        $vivienda = new Vivienda;
        $vivienda->numero = '422';
        $vivienda->domicilio = 'Titanio, miramar. Zaponpan, Jal.';
        $vivienda->descripcion = 'Casa de dos plantas y terraza. Tiene espacio para un carro, ademas de 4 cuartos y un baño';
        $vivienda->user_id = '8';
        $vivienda->save();

    }
}
