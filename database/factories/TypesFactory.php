<?php

use Faker\Generator as Faker;

$factory->define(App\Type::class, function (Faker $faker) {
    $name = $faker->randomElement(['SMATHPHONES', 'BICICLETAS', 'ZAPATOS HOMBRE', 'ROPA HOMBRE', 'GAFAS']);
    return [
        'type' => $name,
        'description' => $faker->text(),
        'category_id'=>\App\Category::all()->random()->id,
    ];
});
