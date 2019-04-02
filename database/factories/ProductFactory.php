<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {

    $name= $faker->sentence;
    return [
        'name' => $name,
        'slug'=>str_slug($name, '-','pro'),
        'status' => $faker->randomElement([Product::DISPONIBLE, Product::NO_DISPONIBLE]),
        'short_description'=>$faker->sentence,
        'description' => $faker->text,
        'multimedia'=>\Faker\Provider\Image::image(storage_path(). '/app/public/products', 600, 350, 'abstract', false),
        'stock'=>$faker->randomNumber,
        'price'=>$faker->randomFloat,
        'price_neto'=>$faker->randomFloat,
        'views'=>$faker->randomNumber,
        'weigth'=>$faker->randomFloat,
        'sell'=>$faker->randomNumber,
        'stores_id'=>\App\Stores::all()->random()->id,
        'sub_categories_id'=>\App\SubCategory::all()->random()->id,
        
        
        
    ];
});          
                    
                           
           

           