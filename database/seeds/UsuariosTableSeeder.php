<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name     = 'Admin';
        $user->username = 'laradmin';
        $user->genero   = 'M';
        $user->lastname = 'Administrador';
        $user->email    = 'admin@mail.com';
        $user->password = 'admin';
        $user->telefono    = '3324237983';
        $user->curp    = 'LOSF200101HJCPNR02';
        $user->fecha_nacimiento    = '2000-01-01';
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Administrador');


         $user = new User;
        $user->name     = 'Usuario';
        $user->username = 'larausuario';
        $user->genero   = 'F';
        $user->lastname = 'Usuarios';
        $user->email    = 'usuario@mail.com';
        $user->password = 'admin';
        $user->telefono    = '3342329738';
        $user->curp    = 'LOSF200101HJCPNR02';
        $user->fecha_nacimiento    = '2000-01-01';
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Inquilino');

        $user = new User;
        $user->name     = 'Francisco';
        $user->username = 'FranciSan';
        $user->genero   = 'M';
        $user->lastname = 'López Sánchez';
        $user->email    = 'franciscols@mail.com';
        $user->password = '12345678';
        $user->telefono    = '3342329738';
        $user->curp    = 'LOSF200101HJCPNR02';
        $user->fecha_nacimiento    = '2000-01-01';
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Inquilino');


        $user = new User;
        $user->name     = 'Mónica';
        $user->username = 'Monigg';
        $user->genero   = 'F';
        $user->lastname = 'Guitierrez Gutierrez';
        $user->email    = 'monigg@mail.com';
        $user->password = '23456789';
        $user->telefono    = '3342329738';
        $user->curp    = 'MGG200101HJCPNR02';
        $user->fecha_nacimiento    = '2000-01-01';
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Inquilino');

        $user = new User;
        $user->name     = 'Pedro Esteban';
        $user->username = 'PedroEs';
        $user->genero   = 'M';
        $user->lastname = 'Sevilla Gutierrez';
        $user->email    = 'pedroesg@mail.com';
        $user->password = '23456789';
        $user->telefono    = '3342329738';
        $user->curp    = 'PESEV200101HJCPNR02';
        $user->fecha_nacimiento    = '2000-01-01';
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Inquilino');

        $user = new User;
        $user->name     = 'Darían';
        $user->username = 'Dariange';
        $user->genero   = 'F';
        $user->lastname = 'Guitierrez Escobedo';
        $user->email    = 'dariangb@mail.com';
        $user->password = '23456789';
        $user->telefono    = '3342329738';
        $user->curp    = 'MGG200101HJCPNR02';
        $user->fecha_nacimiento    = '2000-01-01';
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Inquilino');

        $user = new User;
        $user->name     = 'Luz Elena';
        $user->username = 'Leal';
        $user->genero   = 'F';
        $user->lastname = 'Cruz Escobedo';
        $user->email    = 'luzcre@mail.com';
        $user->password = '23456789';
        $user->telefono    = '3342329738';
        $user->curp    = 'MGG200101HJCPNR02';
        $user->fecha_nacimiento    = '2000-01-01';
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Inquilino');

        $user = new User;
        $user->name     = 'Javier';
        $user->username = 'Leal';
        $user->genero   = 'F';
        $user->lastname = 'Escobedo Sanchez';
        $user->email    = 'javies@mail.com';
        $user->password = '23456789';
        $user->telefono    = '3342329738';
        $user->curp    = 'MGG200101HJCPNR02';
        $user->fecha_nacimiento    = '2000-01-01';
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Inquilino');
    }
}
