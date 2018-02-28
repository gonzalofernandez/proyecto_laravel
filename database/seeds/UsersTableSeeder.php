<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();

        $usuarios = array(
            'nombre' => 'Gonzalo',
            'apellidos' => 'Fernandez Pineda',
            'email' => 'gonzalo.fernande@hotmail.com',
            'password' => \Hash::make('1234'),
            'direccion' => 'c/Alcantara 8 4º D',
            'localidad' => 'Madrid',
            'cp' => '28030',
            'type' => 'user',
        );

        //// Uncomment the below to run the seeder
        DB::table('users')->insert($usuarios);
    }

}
