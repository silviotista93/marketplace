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

        $roles = [ \App\Role::ROOT, \App\Role::SUPER_ADMIN, \App\Role::MARKETING, \App\Role::ADMIN, \App\Role::VENDEDOR, \App\Role::BODEGA, \App\Role::EMPRESA];
        $email = ['root@gmail.com','sadmin@gmail.com','marketing@gmail.com','admin@gmail.com','vendedor@gmail.com','bodega@gmail.com', "empresa@gmail.com" ];
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


         //CATEGORIAS
        //CATEGORIA ELECTRODOMESTICOS

         factory(\App\Category::class, 1)->create(['category'=>'Electrodomesticos','icon'=>'tv']);

        //TIPOS PARA CATEGORIA ELECTRODOMESTICOS
        factory(\App\Type::class, 1)->create(['type'=> 'Linea Blanca','category_id'=> 1]);
        factory(\App\Type::class, 1)->create(['type'=> 'Pequeños Electrodomesticos','category_id'=> 1]);

        // SUBCATEGORIAS PARA ELECTRODOMESTICOS
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Nevera', 'slug' => Str::slug('nevera-1231')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Lavadoras', 'slug' => Str::slug('lavadoras-121')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Hornos y Estufas', 'slug' => Str::slug('horno-1231')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Calentadores de Agua', 'slug' => Str::slug('calentador-342')]);

        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 1,'type_id' => 1,'slug'=>'11']);
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 2,'type_id' => 1,'slug'=>'21']);
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 3,'type_id' => 1,'slug'=>'31']);
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 4,'type_id' => 1,'slug'=>'41']);

        //CATEGORIA DEPORTES.....................................................................................

         factory(\App\Category::class, 1)->create(['category'=>'Deportes','icon'=>'futbol-o']);

        //TIPOS PARA CATEGORIA DEPORTES
        factory(\App\Type::class, 1)->create(['type'=> 'Motos','category_id'=> 2]);
        factory(\App\Type::class, 1)->create(['type'=> 'Futbol','category_id'=> 2]);
        factory(\App\Type::class, 1)->create(['type'=> 'Ejercicio y Fitnes','category_id'=> 2]);
        factory(\App\Type::class, 1)->create(['type'=> 'Campismo','category_id'=> 2]);
        factory(\App\Type::class, 1)->create(['type'=> 'Bicicletas','category_id'=> 2]);

        // SUBCATEGORIAS PARA DEPORTES
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Ropa', 'slug' => Str::slug('ropa-12212')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Cascos', 'slug' => Str::slug('cascos-3123')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Accesorios', 'slug' => Str::slug('accesorios-4123')]);

        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Ropa', 'slug' => Str::slug('ropa-12311')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Guayos', 'slug' => Str::slug('guayos-5641')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Balones', 'slug' => Str::slug('balones-5312')]);

        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Multigimnasio', 'slug' => Str::slug('multigimnasio-523')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Equipos Cardiovascular', 'slug' => Str::slug('equiposc-1221')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Elipticas', 'slug' => Str::slug('elipticas-1312')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Abdominales', 'slug' => Str::slug('abdominales-1231')]);

        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Maletas para camping', 'slug' => Str::slug('maletasc-1231')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Colchones inflables', 'slug' => Str::slug('colchonesi-1223')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Carpas', 'slug' => Str::slug('carpas-412')]);

        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Todo terreno', 'slug' => Str::slug('todot-12411')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Ruta', 'slug' => Str::slug('ruta-3124')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Playeras', 'slug' => Str::slug('playeras-412')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Para ninos', 'slug' => Str::slug('niños-312')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Electricas', 'slug' => Str::slug('electricas-76542')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Cascos', 'slug' => Str::slug('cascos-51212')]);


        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 5,'type_id' => 3,'slug'=>'35']); //Tipo Moto
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 6,'type_id' => 3,'slug'=>'63']); //Tipo Moto
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 7,'type_id' => 3,'slug'=>'73']); //Tipo Moto

        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 8,'type_id' => 4,'slug'=>'84']); //Tipo Futbol
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 9,'type_id' => 4,'slug'=>'93']); //Tipo Futbol
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 10,'type_id' => 4,'slug'=>'104']); //Tipo Futbol

        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 11,'type_id' => 5,'slug'=>'115']); //Tipo Ejercicio y Fitnes
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 12,'type_id' => 5,'slug'=>'125']); //Tipo Ejercicio y Fitnes
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 13,'type_id' => 5,'slug'=>'135']); //Tipo Ejercicio y Fitnes
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 14,'type_id' => 5,'slug'=>'145']); //Tipo Ejercicio y Fitnes

        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 15,'type_id' => 6,'slug'=>'156']); //Tipo Campismo
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 16,'type_id' => 6,'slug'=>'166']); //Tipo Campismo
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 17,'type_id' => 6,'slug'=>'176']); //Tipo Campismo

        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 18,'type_id' => 7,'slug'=>'187']); //Tipo Bicicletas
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 19,'type_id' => 7,'slug'=>'197']); //Tipo Bicicletas
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 20,'type_id' => 7,'slug'=>'207']); //Tipo Bicicletas
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 21,'type_id' => 7,'slug'=>'217']); //Tipo Bicicletas
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 22,'type_id' => 7,'slug'=>'227']); //Tipo Bicicletas
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 23,'type_id' => 7,'slug'=>'237']); //Tipo Bicicletas






         //CATEGORIA ROPA .....................................................................................
         factory(\App\Category::class, 1)->create(['category'=>'Ropa','icon'=>'t-shirt']);

        // SUBCATEGORIAS PARA ROPA
        factory(\App\Type::class, 1)->create(['type'=> 'Ropa para hombre','category_id'=> 3]);
        factory(\App\Type::class, 1)->create(['type'=> 'Ropa para mujer','category_id'=> 3]);

        // SUBCATEGORIAS PARA ROPA
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Sports', 'slug' => Str::slug('sports-151233')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Casual', 'slug' => Str::slug('casual-9823')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Pijamas', 'slug' => Str::slug('pijams-7651')]);

        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Sports', 'slug' => Str::slug('sports-0987')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Casual', 'slug' => Str::slug('casual-41241')]);
        factory(\App\SubCategory::class, 1)->create(['sub_category'=>'Elegante', 'slug' => Str::slug('elegantes-1231')]);

        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 24,'type_id' => 8,'slug'=>'248']); //Tipo Ropa para mujer
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 25,'type_id' => 8,'slug'=>'258']); //Tipo Ropa para mujer
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 26,'type_id' => 8,'slug'=>'268']); //Tipo Ropa para mujer

        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 27,'type_id' => 9,'slug'=>'279']); //Tipo Ropa para hombre
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 28,'type_id' => 9,'slug'=>'289']); //Tipo Ropa para hombre
        factory(\App\TypeSubcategory::class,1)->create(['subcategory_id' => 29,'type_id' => 9,'slug'=>'299']); //Tipo Ropa para hombre


        /* tipos catracteristicas tipo subcategorias */
        factory(\App\CaracteristicaSubtipo::class, 1)->create([
            "nombre" => "Talla",
            "valores" => json_encode(["x","s","l","m","xl"]),
            'validaciones' => '{ "html": { "required": true } }',
            'idSubCategoria' => 29
        ]);

        factory(\App\CaracteristicaSubtipo::class, 1)->create([
            "nombre" => "Material",
            "valores" => json_encode(['poliester']),
            'validaciones' => "{ 'html': { 'required': true } }",
            'idSubCategoria' => 29
        ]);

        factory(\App\CaracteristicaSubtipo::class, 1)->create([
            "nombre" => "Modelo",
            "valores" => '',
            'validaciones' => "{
                'html': {
                    'required': true,
                    'pattern': '[0-9]+',
                    'type': 'number'
                }
            }",
            'idSubCategoria' => 29
        ]);

        factory(\App\CaracteristicaSubtipo::class, 1)->create([
            "nombre" => "Tamaño",
            "valores" => '',
            'validaciones' => "{
                'html': {
                    'required': true
                }
            }",
            'idSubCategoria' => 29
        ]);

        factory(\App\CaracteristicaSubtipo::class, 1)->create([
            "nombre" => "Peso",
            "valores" => '',
            'validaciones' => "{
                'html': {
                    'required': true
                }
            }",
            'idSubCategoria' => 29
        ]);

        factory(\App\CaracteristicaSubtipo::class, 1)->create([
            "nombre" => "Condición producto",
            "valores" => '["nuevo", "usado"]',
            'validaciones' => "{
                'html': {
                    'required': true
                }
            }",
            'idSubCategoria' => 29
        ]);

        factory(\App\CaracteristicaSubtipo::class, 1)->create([
            "nombre" => "Garantia",
            "valores" => '',
            'validaciones' => "{
                'html': {
                    'required': true ,
                    'min': 12
                }
            }",
            'idSubCategoria' => 29
        ]);
    }
}
