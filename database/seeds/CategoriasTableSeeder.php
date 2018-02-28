<?php

use Illuminate\Database\Seeder;
 
class CategoriasTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('categorias')->delete();
 
        $categorias = array(
            ['id' => 1, 'nombre' => 'Tablas', 'slug' => 'Tablas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nombre' => 'Botas', 'slug' => 'Botas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nombre' => 'Cascos', 'slug' => 'Cascos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('categorias')->insert($categorias);
    }
 
}

