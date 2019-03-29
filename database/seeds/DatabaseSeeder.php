<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('user');
        Storage::makeDirectory('user');

        factory(\App\Role::class, 1)->create(['name'=>'Root']);
        factory(\App\Role::class, 1)->create(['name'=>'SupAdmin']);
        factory(\App\Role::class, 1)->create(['name'=>'Marketing']);
        factory(\App\Role::class, 1)->create(['name'=>'Admin']);
        factory(\App\Role::class, 1)->create(['name'=>'Vendedor']);
        factory(\App\Role::class, 1)->create(['name'=>'Bodega']);

        $roles = [ \App\Role::ROOT, \App\Role::SUPER_ADMIN, \App\Role::MARKETING, \App\Role::ADMIN, \App\Role::VENDEDOR, \App\Role::BODEGA ];
        $email = ['root@gmail.com','sadmin@gmail.com','marketing@gmail.com','admin@gmail.com','vendedor@gmail.com','bodega@gmail.com' ];
        $i=0;
        factory(\App\User::class, 1)->create(["email"=>$email[$i]])->each(function(\App\User $u ) use ($roles, $i){
            $u->roles()->attach($roles[$i]);
        });
        $i++;
        factory(\App\User::class, 1)->create(["email"=>$email[$i]])->each(function(\App\User $u ) use ($roles, $i){
            $u->roles()->attach($roles[$i]);
        });
        $i++;
        factory(\App\User::class, 1)->create(["email"=>$email[$i]])->each(function(\App\User $u ) use ($roles, $i){
            $u->roles()->attach($roles[$i]);
        });
        $i++;
        factory(\App\User::class, 1)->create(["email"=>$email[$i]])->each(function(\App\User $u ) use ($roles, $i){
            $u->roles()->attach($roles[$i]);
        });
        $i++;
        factory(\App\User::class, 1)->create(["email"=>$email[$i]])->each(function(\App\User $u ) use ($roles, $i){
            $u->roles()->attach($roles[$i]);
        });
        $i++;
        factory(\App\User::class, 1)->create(["email"=>$email[$i]])->each(function(\App\User $u ) use ($roles, $i){
            $u->roles()->attach($roles[$i]);
        });
        $i++;

         factory(\App\Country::class, 1)->create(['country' => 'Colombia','flag' => '/backend/img/flags/colombia.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Venezuela','flag' => '/backend/img/flags/venezuela.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Ecuador','flag' => '/backend/img/flags/ecuador.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Perú','flag' => '/backend/img/flags/peru.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Brasil','flag' => '/backend/img/flags/brazil.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Panamá','flag' => '/backend/img/flags/panama.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Paraguay','flag' => '/backend/img/flags/paraguay.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Uruguay','flag' => '/backend/img/flags/uruguay.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Argentina','flag' => '/backend/img/flags/argentina.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Chile','flag' => '/backend/img/flags/chile.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Mexico','flag' => '/backend/img/flags/mexico.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Puerto Rico','flag' => '/backend/img/flags/puerto-rico.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Guatemala','flag' => '/backend/img/flags/guatemala.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Cuba','flag' => '/backend/img/flags/cuba.png']);
         factory(\App\Country::class, 1)->create(['country' => 'El Salvador','flag' => '/backend/img/flags/el-salvador.png']);
         factory(\App\Country::class, 1)->create(['country' => 'República Dominicana','flag' => '/backend/img/flags/dominican-republic.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Honduras','flag' => '/backend/img/flags/honduras.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Nicaragua','flag' => '/backend/img/flags/nicaragua.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Bolivia','flag' => '/backend/img/flags/bolivia.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Estados Unidos','flag' => '/backend/img/flags/united-states.png']);
         factory(\App\Country::class, 1)->create(['country' => 'Costa Rica','flag' => '/backend/img/flags/costa-rica.png']);

         factory(\App\City::class, 10)->create();
         
        
    }
}
