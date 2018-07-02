<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' 		=> 'Silvio Ramirez',
        'cedula' 	=> 'V20428781',
        'telefono' 	=> '0426-4051567',
        'municipio' => 'MP. ESCUQUE',
        'email' 	=> 'silvio.ramirez.m@gmail.com',
        'password' 	=> '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Persona::class, function (Faker $faker) {
    return [
        'nombres' 		=> $faker->firstName,
        'cedula' 		=> $faker->numberBetween(100000, 30000000),
        'f_nacimiento' 	=> $faker->DateTime(),
        'edad'			=> $faker->randomDigitNotNull(),
        'direccion' 	=> $faker->address(),
        'c_comunal' 	=> $faker->name(),
        'telefono_1' 	=> '0426-4051567',
        'telefono_2' 	=> '0271-2950216',
        'parroquia' 	=> $faker->cityPrefix(),
        'municipio' 	=> $faker->state(),
        'correo' 		=> $faker->unique()->safeEmail,
        'facebook' 		=> $faker->url(),
        'instagram' 	=> $faker->url(),
        'twitter' 		=> $faker->url(),
        'whatsapp' 		=> $faker->url(),
        'youtube' 			=> $faker->url(),
        'snapchat' 			=> $faker->url(),
        'responsabilidad' 	=> $faker->text(10),
        'estructura' 		=> $faker->text(10),
        'centro_votacion' 	=> $faker->name(),
        'vocero_comunal' 	=> $faker->boolean(50),
        'vocero_comunal_descripcion' 	=> $faker->text(20),
        'beneficiario_mision' 			=> $faker->boolean(50),
        'beneficiario_mision_descripcion' => $faker->text(20),
        'embarazo'                      => $faker->boolean(50),
        'vivienda'                      => $faker->text(20),
        'deporte' 						=> $faker->boolean(50),
        'actividad_extra' 				=> $faker->text(20),
        'enfermedad' 					=> $faker->text(20),
        'campismo' 						=> $faker->text(20),
        'cultura' 						=> $faker->boolean(50),
        'cultura_descripcion'			=> $faker->text(20),
        'grado_instruccion' 			=> $faker->text(10),
        'liceo_universidad' 			=> $faker->name(),
        'carrera' 						=> $faker->name(),
        'lugar_trabajo' 				=> $faker->name(),
        'votantes_centro' 				=> $faker->randomDigitNotNull(10),
        'votantes_centro_descripcion' 	=> $faker->boolean(50),
        'conoce_centro' 				=> $faker->boolean(50),
        'conoce_centro_descripcion' 	=> $faker->text(10),
        'responsables_ubch' 			=> $faker->boolean(50),
        'responsables_ubch_descripcion' => $faker->text(10),
        'entrenamiento_especial' 		=> $faker->boolean(50),
        'entrenamiento_especial_descripcion' => $faker->text(10),
        'leer' 							=> $faker->boolean(50),
        'leer_descripcion' 				=> $faker->text(10),
        'conoce_lineas' 				=> $faker->boolean(50),
        'conoce_estructura' 			=> $faker->boolean(50),
        'recuerda_intervencion' 		=> $faker->boolean(50),
        'banco' 						=> $faker->name(),
        'cuenta' 						=> $faker->bankAccountNumber(),
        'cuenta_tipo' 					=> $faker->text(10),
        /*'imagen' 						=> '',
        'uuid' 							=> '',//$faker->unique()->uuid(),*/
            
    ];
});