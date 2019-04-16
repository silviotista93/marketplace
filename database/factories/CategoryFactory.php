<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $category=$faker->randomElement(['TECHNOLOGIA', 'DEPORTES','CALZADO','ROPA','ACCESORIOS','HOGAR','BELLEZA']);
    return [
        'category' => $category,
        'slug' => str_slug($category, '-'),
        'category_picture' => "/storage/category/".\Faker\Provider\Image::image(storage_path(). '/app/public/category', 600, 350, 'technics', false)
    ];
});
