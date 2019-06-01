<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Store::class, function (Faker $faker) {
    return [
        'rut' => $faker->unique()->randomNumber(),
        'bank_statement' => Str::random(50),
        'dni_picture' => Str::random(50),
        'status' => $faker->randomElement([App\Store::INACTIVO.'', App\Store::ACTIVO.'']),
        'users_id' => \App\User::all()->random()->id,
        'store_name' => $faker->name,
        'adress_store' => $faker->address,
        'phone_store' => $faker->phoneNumber,
        'store_description' => $faker->paragraph,
        'city_id' => \App\City::all()->random()->id,
        'country_id' => \App\Country::all()->random()->id
    ];
});
