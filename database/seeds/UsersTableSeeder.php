<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();

        $usuarios = array(
            'nombre' => 'Gonzalo',
            'apellidos' => 'Fernandez Pineda',
            'email' => 'g@g.es',
            'password' => \Hash::make('1234'),
            'direccion' => 'c/Alcantara 8 4º D',
            'localidad' => 'Madrid',
            'cp' => '28000',
            'type' => 'admin',
        );

        //// Uncomment the below to run the seeder
        DB::table('users')->insert($usuarios);
    }

}
