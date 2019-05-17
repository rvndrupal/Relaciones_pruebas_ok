<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role; //agragar rol

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionsTableSeeder::class);
         factory(App\Product::class, 50)->create();
         factory(App\User::class, 6)->create();

         factory(App\Category::class, 20)->create();
         factory(App\Tag::class, 21)->create();

         factory(App\Post::class, 300)->create()->each(function(App\Post $post){
             $post->tags()->attach([
                rand(1,5),
                rand(6,14),
                rand(15,20),

             ]);
         });
         //fregona para cargar tablas pivote recordar dar de alta la relacioón sino no funciona


         Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'special' => 'all-access'
        ]);

        App\User::create([
            'name'=>'rodrigo',
            'email'=>'rodrigo@gmail.com',
            'password'=>bcrypt('rorro'),

        ]);
    }
}
