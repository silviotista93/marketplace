<?php

use Faker\Generator as Faker;

$factory->define(App\Location_users::class, function (Faker $faker) {
    return [
        'country' => $faker->word,
        'city_id' => \App\City::all()->random()
    ];
});
