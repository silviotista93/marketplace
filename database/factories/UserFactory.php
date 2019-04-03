<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.

            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');           
             
                
       
          
|
*/
$factory->define(User::class, function (Faker $faker) {
    $name= $faker->name;
      
    return [
        'name' => $name,
        'slug'=>str_slug($name, '-'),
        'last_name'=>$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'phone_1'=>$faker->phoneNumber,
        'phone_2'=>$faker->phoneNumber,
        'gender' => $faker->randomElement(['Male', 'Female', 'Other']),
        'birthday'=>$faker->dateTimeBetween($startDate = '-30 years', $endDate = '-18 years', $timezone = null),
        'picture'=> "/backend/img/perfil.jpg",
        'password' => bcrypt('secret'), // password
        'remember_token' => str_random(10),
    ];
});
