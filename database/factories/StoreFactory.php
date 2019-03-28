<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Store::class, function (Faker $faker) {
    return [
        'rut' => $faker->unique()->randomNumber(),
        'bank_statement' => Str::random(50),
        'dni_picture' => Str::random(50),
        'status' => $faker->randomElement([App\Store::INACTIVO, App\Store::ACTIVO]),
        'user_id' => $faker->numberBetween(1,50)
    ];
});
