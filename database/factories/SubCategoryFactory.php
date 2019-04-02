<?php

use Faker\Generator as Faker;

$factory->define(App\SubCategory::class, function (Faker $faker) {
    return [
        'sub_category' => $faker->word,
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
   
            $table->string("sub_category");
            $table->string("slug");
            $table->string("sub_category_picture");
            $table->unsignedBigInteger("categories_id");
            $table->foreign("categories_id")->references("id")->on("categories");
            
});
