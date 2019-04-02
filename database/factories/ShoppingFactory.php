<?php

use Faker\Generator as Faker;

$factory->define(App\Shopping::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement([Shopping::ENVIADO, Shopping::CANCELADO, Shopping::ENTREGADO, Shopping::EN_ESPERA]),
        'payment_method' => $faker->creditCardType ,
        'total_price' => $faker->randomFloat ,
        'user_id' => \App\User::all()->random()->id,    
        
        
    ];
    
        
        
});
