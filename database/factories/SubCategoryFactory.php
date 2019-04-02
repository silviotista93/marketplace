<?php

use Faker\Generator as Faker;

$factory->define(App\SubCategory::class, function (Faker $faker) {
    $name=$faker->randomElement(['COMPUTADORES', 'RAQUETAS','TENNIS','CAMISA','VESTIDOS']);
    return [
        'sub_category' => $name,
        'slug'=>str_slug($name, '-','pro'),
        'sub_category_picture'=>\Faker\Provider\Image::image(storage_path(). '/app/public/subcategory', 600, 350, 'abstract', false),
       
        'categories_id'=>\App\Category::all()->random()->id,


    ];   
            
            
});
