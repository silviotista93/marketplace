<?php

use Faker\Generator as Faker;

$factory->define(App\TypeSubcategory::class, function (Faker $faker) {
    $subcategory = \App\SubCategory::all()->random()->id;
    $type = \App\Type::all()->random()->id;
    return [
        'subcategory_id'=>$subcategory,
        'type_id'=>$type,
        'slug'=>$subcategory+$type,
    ];
});
