<?php

use Faker\Generator as Faker;

$factory->define(App\Type::class, function (Faker $faker) {
    $name = $faker->unique(true)->randomElement(['SMATHPHONES', 'BICICLETAS', 'ZAPATOS HOMBRE', 'ROPA HOMBRE', 'GAFAS']);
    return [
        'type' => ucfirst($name),
        'description' => $faker->word(),
        'category_id'=>\App\Category::all()->random()->id,
    ];
});
