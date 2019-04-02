<?php

use Faker\Generator as Faker;

$factory->define(App\Slide::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'country_id' => \App\City::all()->random()->id,
        'image' => \Faker\Provider\Image::image(storage_path(). '/app/public/slide', 600, 350, 'abstract', false),
        'subcategory_id'=>\App\subCategory::all()->random()->id
    ];

    
    
   
    
});
