<?php

use Faker\Generator as Faker;

$factory->define(App\Cities::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'country_id' => \App\City::all()->random()->i
    ];
});
