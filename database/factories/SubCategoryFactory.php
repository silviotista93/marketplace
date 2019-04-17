<?php

use Faker\Generator as Faker;

$factory->define(App\SubCategory::class, function (Faker $faker) {
    $name=$faker->unique()->randomElement(['CELULARES', 'BICICLETAS RUTA','TENNIS','CAMISA','GAFAS DE SOL']);
    return [
        'sub_category' => $name,
        'slug'=>str_slug($name, '-','pro'),
        'sub_category_picture'=>"/storage/subcategory/".\Faker\Provider\Image::image(storage_path(). '/app/public/subcategory', 600, 350, 'abstract', false),       


    ];   
            
            
});
