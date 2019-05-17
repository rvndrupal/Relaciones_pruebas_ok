<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuarios
        Permission::create([
            'name' => 'Navegar Usuarios',
            'slug' => 'users.index',
            'description'  => 'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Usuario',
            'slug' => 'users.create',
            'description'  => 'Crear un nuevo Usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de Usuarios',
            'slug' => 'users.show',
            'description'  => 'Ver en detalle cada usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de Usuarios',
            'slug' => 'users.edit',
            'description'  => 'Editar cualquier dato de un usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Usuario',
            'slug' => 'users.destroy',
            'description'  => 'Eliminar cualquier dato de un usuario del sistema',

        ]);
        //usuarios

        //roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description'  => 'Lista y navega todos los roles del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de roles',
            'slug' => 'roles.show',
            'description'  => 'Ver en detalle cada rol del sistema',

        ]);

        Permission::create([
            'name' => 'Crear un nuevo Rol',
            'slug' => 'roles.create',
            'description'  => 'Crear un nuevo rol del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description'  => 'Editar cualquier dato de un rol del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Rol',
            'slug' => 'roles.destroy',
            'description'  => 'Eliminar cualquier dato de un rol del sistema',

        ]);
        //roles

        //Products
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index',
            'description'  => 'Lista y navega todos los products del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de products',
            'slug' => 'products.show',
            'description'  => 'Ver en detalle cada producto del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Producto',
            'slug' => 'products.create',
            'description'  => 'Crear un nuevo producto del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de products',
            'slug' => 'products.edit',
            'description'  => 'Editar cualquier dato de un producto del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar producto',
            'slug' => 'products.destroy',
            'description'  => 'Eliminar cualquier dato de un producto del sistema',

        ]);
        //Products


        //Tags
        Permission::create([
            'name' => 'Navegar tag',
            'slug' => 'tags.index',
            'description'  => 'Lista y navega todos los tags del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de tags',
            'slug' => 'tags.show',
            'description'  => 'Ver en detalle cada tag del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo tag',
            'slug' => 'tags.create',
            'description'  => 'Crear un nuevo tag del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de tags',
            'slug' => 'tags.edit',
            'description'  => 'Editar cualquier dato de un tag del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar tag',
            'slug' => 'tags.destroy',
            'description'  => 'Eliminar cualquier dato de un tag del sistema',

        ]);
        //Tags

         //Categorias
         Permission::create([
            'name' => 'Navegar Categoria',
            'slug' => 'categories.index',
            'description'  => 'Lista y navega todos los categories del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de categories',
            'slug' => 'categories.show',
            'description'  => 'Ver en detalle cada categoria del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo categoria',
            'slug' => 'categories.create',
            'description'  => 'Crear un nuevo categoria del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de categories',
            'slug' => 'categories.edit',
            'description'  => 'Editar cualquier dato de un categoria del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar categoria',
            'slug' => 'categories.destroy',
            'description'  => 'Eliminar cualquier dato de un categoria del sistema',

        ]);
        //Categorias

         //Post
         Permission::create([
            'name' => 'Navegar Post',
            'slug' => 'posts.index',
            'description'  => 'Lista y navega todos los posts del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de posts',
            'slug' => 'posts.show',
            'description'  => 'Ver en detalle cada post del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo post',
            'slug' => 'posts.create',
            'description'  => 'Crear un nuevo post del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de posts',
            'slug' => 'posts.edit',
            'description'  => 'Editar cualquier dato de un post del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar post',
            'slug' => 'posts.destroy',
            'description'  => 'Eliminar cualquier dato de un post del sistema',

        ]);
        //Post

    }
}
