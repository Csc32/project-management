<?php

namespace Database\Seeders;

use App\Models\StudentGroups;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $student = User::factory()->create(
            [
                'user_id' => '29964042',
                'names' => strtoupper('Carlos'),
                'lastnames' => strtoupper('Sanzonetty'),
                'sex' => 'M',
                'password' => bcrypt('29964042'),
                'telephone_number' => '04263192920',
                'email' => 'carlos@gmail.com',
                'date_of_birth' => '01/11/2002',
                'rol_fk' => 3,
                'pfg_fk' => 1,
            ]
        );

        $teacher = User::factory()->create(
            [
                'user_id' => '12275012',
                'names' => strtoupper('Soliver'),
                'lastnames' => strtoupper('Carpintero'),
                'sex' => 'F',
                'password' => bcrypt('12275012'),
                'telephone_number' => '04263180034',
                'email' => 'sol@gmail.com',
                'date_of_birth' => '04/10/1997',
                'rol_fk' => 2,
                'pfg_fk' => 1,
            ]
        );

        $project = $teacher->teacher_projects()->create(
            [
                'name' => strtoupper('Desarrollar un sistema informatico para el registro de habitantes de la comunidad Juana la Avanzadora'),
                'resume' => 'Este es un sistema desarrollado en la comunidad juana la avanzadora en vista de la ineficiancia a la hora de consultar la información',
                'pfg_fk' => 1,
                'kind_fk' => 1,
                'isPresent' => false,
            ]
        );

        $groups = StudentGroups::factory()->create(
            [
                'project_fk' => 1,
                'student_fk' => 2,
            ]
        );

        User::factory()->createMany(50);
    }
}
