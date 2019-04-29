<?php

use Faker\Generator as Faker;

$factory->define(App\Type::class, function (Faker $faker) {
    $name = $faker->unique(true)->randomElement(['SMARTHPHONES', 'BICICLETAS', 'ZAPATOS HOMBRE', 'ROPA HOMBRE', 'GAFAS']);
    return [
        'type' => $name,
        'description' => $faker->text(),
        'category_id'=>\App\Category::all()->random()->id,
    ];
});
