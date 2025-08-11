<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // 🔹 Limpiar caché de permisos
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // 🔹 Crear permisos
        $menuAdmin = Permission::firstOrCreate(['name' => 'menu-admin']);
        $menuEstudiante = Permission::firstOrCreate(['name' => 'menu-estudiante']);

        // 🔹 Crear roles y asignar permisos
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->givePermissionTo($menuAdmin);

        $estudianteRole = Role::firstOrCreate(['name' => 'estudiante']);
        $estudianteRole->givePermissionTo($menuEstudiante);

        // 🔹 Crear usuarios de ejemplo y asignar roles
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Administrador', 'password' => bcrypt('123456')]
        );
        $adminUser->assignRole('admin');
        $adminUser->givePermissionTo('menu-admin');

        $estudianteUser = User::firstOrCreate(
            ['email' => 'estudiante@example.com'],
            ['name' => 'Estudiante', 'password' => bcrypt('123456')]
        );
        $estudianteUser->assignRole('estudiante');
        $estudianteUser->givePermissionTo('menu-estudiante');
    }
}
