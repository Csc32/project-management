<?php

namespace Database\Seeders;

use App\Models\Permissions;
use App\Models\Roles;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $attributes = ['Gestionar Roles', 'Gestionar Permisos', 'Gestionar Profesores', 'Gestionar proyectos', 'Gestionar Estudiantes', 'Visualizar proyectos', 'Descargar planilla'];

    public function run(): void
    {
        //
        $allRoles = Roles::all()->keyBy('id');

        $permissions = [
            'gestionar-roles' => [Roles::ROLE_ADMINISTRATOR],
            'gestionar-permisos' => [Roles::ROLE_ADMINISTRATOR],
            'gestionar-profesores' => [Roles::ROLE_ADMINISTRATOR],
            'gestionar-proyectos' => [Roles::ROLE_TEACHER],
            'gestionar-estudiantes' => [Roles::ROLE_TEACHER],
            'visializar-proyectos' => [Roles::ROLE_STUDENT],
            'descargar-planilla' => [Roles::ROLE_STUDENT],
        ];
        foreach ($permissions as $key => $roles) {
            $permission = Permissions::factory()->create(['name' => $key]);
            foreach ($roles as $role) {
                $allRoles[$role]->permissions()->attach($permission->id);
            }
        }
    }
}
