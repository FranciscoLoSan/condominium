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
        $servicio->nombre = 'Reposta de gas';
        $servicio->descripcion = 'Se lleno el tanque estacional del gas';
        $servicio->costo = '1700.99';
        $servicio->created_at = '2021-11-15';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Mantenimiento en instalaciones eléctricas';
        $servicio->descripcion = 'Se reviso cableado del condminio asi como se repararon algunos sectores de la instalación';
        $servicio->costo = '9999.99';
        $servicio->created_at = '2021-11-16';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Mantenimiento en paredes de fachada';
        $servicio->descripcion = 'Se recubrio ciertas partes dañadas de las paredes, ademas se pintaron';
        $servicio->costo = '4699.99';
        $servicio->created_at = '2021-11-16';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Mantenimiento en instalaciones de agua potable';
        $servicio->descripcion = 'Se reparo tuvo roto de la toma de agua principal';
        $servicio->costo = '1500';
        $servicio->created_at = '2021-11-16';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Cambio de vidrios en ventanas';
        $servicio->descripcion = 'En cada hogar se cabiaron los vidrios de las ventanas para una mejor apariencia';
        $servicio->costo = '5599.99';
        $servicio->created_at = '2021-11-16';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Jardinería';
        $servicio->descripcion = 'Se podaron y detallaron albores, así com pasto de las areas verdes';
        $servicio->costo = '8499.99';
        $servicio->created_at = '2021-11-10';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Limpieza de tinacos';
        $servicio->descripcion = 'Se labaron tinacos del condominio';
        $servicio->costo = '1299.99';
        $servicio->created_at = '2021-11-03';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Fumigación';
        $servicio->descripcion = 'Se hizo fumigacion a todas la viviendas del condominio';
        $servicio->costo = '18999.99';
        $servicio->created_at = '2021-11-23';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Reposta de gas';
        $servicio->descripcion = 'Se lleno el tanque estacional del gas';
        $servicio->costo = '1700.99';
        $servicio->created_at = '2021-12-22';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Limpieza de tinacos';
        $servicio->descripcion = 'Se labaron tinacos del condominio';
        $servicio->costo = '1299.99';
        $servicio->created_at = '2021-12-18';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Reparación de boiler';
        $servicio->descripcion = 'Se repararon tuberias de gas de los boiler';
        $servicio->costo = '1299.99';
        $servicio->created_at = '2021-12-18';
        $servicio->save();

        $servicio = new Servicio;
        $servicio->nombre = 'Fumigación';
        $servicio->descripcion = 'Se hizo fumigacion a todas la viviendas del condominio';
        $servicio->costo = '18999.99';
        $servicio->created_at = '2021-12-23';
        $servicio->save();
    }
}
