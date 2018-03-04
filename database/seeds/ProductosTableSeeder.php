<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('productos')->delete();

        $productos = array(
            ['id' => 1, 'nombre' => 'Salomon Snowboard Pulse 145', 'slug' => 'tabla-1', 'categoria_id' => 1, 'descripcion' => 'Hemos dado a la Pulse un nuevo impulso en 2016, con Flat Out Camber y Bite Free Edges, para que montes de forma creativa y sin peligros. La Pulses presenta una forma completamente nueva, con un núcleo de álamo con una forma simétrica direccional muy versátil. No perderás ni un segundo.Caracteristicas: - Su forma simétrica direccional es cómoda tanto en terrenos de freeride como de freestyle.- Su Flat Out Camber aporta un perfil plano a la espátula/cola y entre los pies.', 'precio' => '160.95', 'imagen' => 'img/tablas/tabla-1.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nombre' => 'Burton Process Smalls 2018', 'slug' => 'tabla-2', 'categoria_id' => 1, 'descripcion' => 'Process Smalls es un snowboard que te proporciona ese empujón adicional que necesitas cuando has tenido bastante de las ligas iniciales y estás listo para salir del nivel principiante. Con la combinación de la curva Flat Top y un núcleo The Filet-O-Flex conseguirás un deslizamiento muy estable y suave y dejará al resto de snowboards de la misma categoría a la altura del betún. Esta tabla all-mountain te da la libertad de adentrarte en las situaciones más avanzadas.', 'precio' => '173.27', 'imagen' => 'img/tablas/tabla-2.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nombre' => 'Salomon The Villain Grom', 'slug' => 'tabla-3', 'categoria_id' => 1, 'descripcion' => 'Con toda la tecnología que incorpora su hermana mayor, la tabla de snowboard Villain Grom presenta una forma simétrica con un tamaño reducido. Incorpora Rock Out Camber para ofrecer una combinación de tolerancia y control de bordes, mientras que la construcción Popster con Aspen Core genera un pop más acusado. Con los bordes Bite Free Edges, los pros del día de mañana dirán adiós a los obstáculos y los escorpiones.', 'precio' => '150.00', 'imagen' => 'img/tablas/tabla-3.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'nombre' => 'Salomon Snowboard Faction', 'slug' => 'bota-1', 'categoria_id' => 2, 'descripcion' => 'Ninguna otra bota de este precio tiene tanto pedigrí como la bota de snow Faction. Con el énfasis de Salomon en el ADN de la bota, tanto el ajuste como la respuesta y la durabilidad son los factores clave del momento, junto con el diseño que integra esta rebelde sin causa.', 'precio' => '99.45', 'imagen' => 'img/botas/bota-1.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'nombre' => 'Burton Grom Boa Botas', 'slug' => 'bota-2', 'categoria_id' => 2, 'descripcion' => 'Grom Boa Snowboard Boot. Flex / Response: Nueva Suela Y Materiales Superiores De Carcasa De Flexión Más Blanda Para Una Mayor Comodidad Al Aprender.', 'precio' => '122.95', 'imagen' => 'img/botas/bota-2.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'nombre' => 'Vans Brystal Botas', 'slug' => 'bota-3', 'categoria_id' => 2, 'descripcion' => 'Las botas de snowboard Brystal de Vans son ligeras, reaccionan rpidamente y rinden espectacularmente en todos los terrenos de manera constante a lo largo del día.', 'precio' => '143.95', 'imagen' => 'img/botas/bota-3.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'nombre' => 'Quiksilver Motion', 'slug' => 'casco-1', 'categoria_id' => 3, 'descripcion' => 'Casco de snowboard/esquí para HombreFeaturesExterior: estructura ABS resistente - Interior/forro: con tejido polar para mayor abrigo - Ventilación: sistema de ventilación pasiva en la parte superior para incrementar el flujo de aire - Orejeras/audio: almohadillas extraíbles', 'precio' => '48.95', 'imagen' => 'img/cascos/casco-1.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'nombre' => 'Roxy Avery Bounding 2017', 'slug' => 'casco-2', 'categoria_id' => 3, 'descripcion' => 'Características incluyen: construcción muy ligera en molde de doble micro shell, almohadilla protectora de EPS, ventilaciones superiores y frontales para incrementar el flujo de aire, forro de redecilla y polar para máxima comodidad, suaves y termoformadas orejeras desmontables con tejido de sherpa y kit de sistema de audio compatible.', 'precio' => '49.90', 'imagen' => 'img/cascos/casco-2.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'nombre' => 'Picture Spread 2.0', 'slug' => 'casco-3', 'categoria_id' => 3, 'descripcion' => 'Caracteristicas: Casco de Snowboard - Casco de Ski Interior moldeado Interior extraíble; Acolchado interior extraíble Tamaño ajustable Fidlock', 'precio' => '148.47', 'imagen' => 'img/cascos/casco-3.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'nombre' => 'Ride Rapture 147', 'slug' => 'tabla-4', 'categoria_id' => 1, 'descripcion' => 'En cualquier nivel triturar, sea cual sea el nivel siguiente usted tiene su ojo en, el paseo rapto tiene tanto una suave flexión y la forma de poca altura, diseñado para una rápida progresión. Enlace resulta sencilla y sin problemas, y luego ganando velocidad en tiendas de comida para rectas - gemelo de la forma del rapto se mantiene fiel a sus inicios versátiles.', 'precio' => '221.45', 'imagen' => 'img/tablas/tabla-4.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'nombre' => 'Nidecker Axis', 'slug' => 'tabla-5', 'categoria_id' => 1, 'descripcion' => 'El producto Nidecker Axis pertenece a la categoría Tablas All Mountain . El envío a través de Europa, ayuda de la tienda de 7 días a la semana durante la apertura de nuestra tienda.', 'precio' => '272.10', 'imagen' => 'img/tablas/tabla-5.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'nombre' => 'Anon Raider', 'slug' => 'casco-4', 'categoria_id' => 3, 'descripcion' => 'Si vale para el skate, seguro que funciona para el snowboard. Forro de fibra, clip para las gafas desmontable y sistema de ventilación.', 'precio' => '61.47', 'imagen' => 'img/cascos/casco-4.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'nombre' => 'Ski Helmet Smith Aspect', 'slug' => 'casco-5', 'categoria_id' => 3, 'descripcion' => 'El producto Smith Aspect pertenece a la categoría Mens ski helmets. El envío a través de Europa, ayuda de la tienda de 7 días a la semana durante la apertura de nuestra tienda.', 'precio' => '59.00', 'imagen' => 'img/cascos/casco-5.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'nombre' => 'Salomon Snowboard Whipstar', 'slug' => 'bota-4', 'categoria_id' => 2, 'descripcion' => 'Botas de snowboard Whipstar / Rojo Brillante Negro / negro Salomon Este nuevo arranque para los niños está disponible en muchos tamaños y permite a los ciclistas más pequeños que aspiran a poner en marcha y comenzar a realizar su sueño. El nuevo Whipstar es fácil de poner, a los zapatos y de ajustar gracias a las correas de Velcro doble EZ', 'precio' => '53.95', 'imagen' => 'img/botas/bota-4.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'nombre' => 'Dc Shoes Youth Scout', 'slug' => 'bota-5', 'categoria_id' => 2, 'descripcion' => 'ÍNDICE DE FLEXIBILIDAD: 3/10. Material; Parte Superior: Sintético, Forro: Textil, Suela: Goma.', 'precio' => '110.95', 'imagen' => 'img/botas/bota-5.png', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('productos')->insert($productos);
    }

}
