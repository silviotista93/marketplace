<?php

use Faker\Generator as Faker;

$factory->define(App\Images::class, function (Faker $faker) {
    return [
        'image'=>\Faker\Provider\Image::image(storage_path(). '/app/public/products', 600, 350, 'abstract', false),
    ];
});
