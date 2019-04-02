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
        Storage::deleteDirectory('category');
        Storage::makeDirectory('category');
        Storage::deleteDirectory('subcategory');
        Storage::makeDirectory('subcategory');

        factory(\App\Role::class, 1)->create(['name'=>'Root']);
        factory(\App\Role::class, 1)->create(['name'=>'SupAdmin','super_role_id'=>\App\Role::ROOT]);
        factory(\App\Role::class, 1)->create(['name'=>'Marketing', 'super_role_id'=>\App\Role::ROOT]);
        factory(\App\Role::class, 1)->create(['name'=>'Admin', 'super_role_id'=>\App\Role::EMPRESA]);
        factory(\App\Role::class, 1)->create(['name'=>'Vendedor','super_role_id'=>\App\Role::EMPRESA]);
        factory(\App\Role::class, 1)->create(['name'=>'Bodega','super_role_id'=>\App\Role::EMPRESA]);
        factory(\App\Role::class, 1)->create(['name'=>'Empresa']);

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

         factory(\App\Country::class, 1)->create(['name' => 'Colombia','flag' => '/backend/img/countries/colombia.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Venezuela','flag' => '/backend/img/countries/venezuela.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Ecuador','flag' => '/backend/img/countries/ecuador.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Perú','flag' => '/backend/img/countries/peru.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Brasil','flag' => '/backend/img/countries/brazil.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Panamá','flag' => '/backend/img/countries/panama.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Paraguay','flag' => '/backend/img/countries/paraguay.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Uruguay','flag' => '/backend/img/countries/uruguay.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Argentina','flag' => '/backend/img/countries/argentina.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Chile','flag' => '/backend/img/countries/chile.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Mexico','flag' => '/backend/img/countries/mexico.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Puerto Rico','flag' => '/backend/img/countries/puerto-rico.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Guatemala','flag' => '/backend/img/countries/guatemala.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Cuba','flag' => '/backend/img/countries/cuba.png']);
         factory(\App\Country::class, 1)->create(['name' => 'El Salvador','flag' => '/backend/img/countries/el-salvador.png']);
         factory(\App\Country::class, 1)->create(['name' => 'República Dominicana','flag' => '/backend/img/countries/dominican-republic.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Honduras','flag' => '/backend/img/countries/honduras.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Nicaragua','flag' => '/backend/img/countries/nicaragua.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Bolivia','flag' => '/backend/img/countries/bolivia.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Estados Unidos','flag' => '/backend/img/countries/united-states.png']);
         factory(\App\Country::class, 1)->create(['name' => 'Costa Rica','flag' => '/backend/img/countries/costa-rica.png']);

         factory(\App\City::class, 10)->create();
         factory(\App\Category::class, 10)->create();

         factory(\App\SubCategory::class, 10)->create();


         
        
    }
}
