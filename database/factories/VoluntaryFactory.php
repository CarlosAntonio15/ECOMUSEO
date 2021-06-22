<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\voluntary;
use Faker\Generator as Faker;

$factory->define(voluntary::class, function (Faker $faker) {
    return [
        'Nombre' => $faker->name,
        'Apellido_1' => $faker->lastName,
        'Apellido_2' => $faker->lastName,
        'Edad' => $this->faker->numberBetween(18, 50),
        'Telefono' => $this->faker->numberBetween(80000000,89999999),
        'Direccion' => $this->faker->address().', '.$this->faker->city().', '.$this->faker->state(), 
        'Email' => $faker->unique()->safeEmail,
        'Descripcion' => $this->faker->text(100),
    ];
});
