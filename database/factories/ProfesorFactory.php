<?php

use Faker\Generator as Faker;

$factory->define(App\Profesor::class, function (Faker $faker) {
    return [
        //Definimos los campos
    	'nombre' => $faker->name,
    	'apellido' => $faker->lastname,
    	'dui' => $faker->title,
    	'telefono' => $faker->title,
    	'email' => $faker->email,
    	'clave' => $faker->password,
    ];
});
