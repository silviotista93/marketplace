<?php

use Faker\Generator as Faker;

$factory->define(App\Description::class, function (Faker $faker) {

    return [
        
        'key' => $faker->word,
        'value' =>$faker->word,

    ];

   
            
});
