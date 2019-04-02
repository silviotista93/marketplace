<?php

use Faker\Generator as Faker;

$factory->define(App\Reviews::class, function (Faker $faker) {

    $rating= mt_rand(1,5);
    return [
        'rating' => $ratin,
        'comment' => $faker->text(200),
        'product_id' => \App\Project::all()->random()->id,
        'user_id' => \App\Project::all()->random()->id,
    ];
});
