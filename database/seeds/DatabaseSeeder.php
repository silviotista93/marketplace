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

        
    }
}
