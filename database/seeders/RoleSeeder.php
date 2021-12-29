<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'admin.home', 'description' => 'Ver panel de administracion'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.create', 'description' => 'Asignar rol a un usuario'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Editar rol a un usuario'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categorias.index', 'description' => 'Ver listado de categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categorias.create', 'description' => 'Crear categorías'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categorias.edit', 'description' => 'Actualizar categorías'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categorias.destroy', 'description' => 'Eliminar categorías'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.etiquetas.index', 'description' => 'Ver listado de etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.etiquetas.create', 'description' => 'Crear etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.etiquetas.edit', 'description' => 'Editar etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.etiquetas.destroy', 'description' => 'Eliminar etiquetas'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index', 'description' => 'Ver listado de posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Editar post'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Eliminar post'])->syncRoles([$role1, $role2]);
    }
}
