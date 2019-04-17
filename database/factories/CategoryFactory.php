<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $category=$faker->unique()->randomElement(['TECHNOLOGIA', 'DEPORTES','CALZADO','ROPA','ACCESORIOS']);
    return [
        'category' => $category,
        'slug' => str_slug($category, '-'),
        'icon' => 't-shirt',
        'category_picture' => "/storage/category/".\Faker\Provider\Image::image(storage_path(). '/app/public/category', 600, 350, 'technics', false)
    ];
});
