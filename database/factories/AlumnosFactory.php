<?php

use Faker\Generator as Faker;

$factory->define(App\Alumnos::class, function (Faker $faker) {
    return [
        //Definimos los campos
    	'nombre' => $faker->name,
    	'apellido' => $faker->lastname,
    	'fechanacimiento' => $faker->date,
    	'direccion' => $faker->title,
    	'genero' => $faker->title,
    	'telefono' => $faker->title,
    	'correo' => $faker->email,
    	'clave' => $faker->password,
    ];
});
