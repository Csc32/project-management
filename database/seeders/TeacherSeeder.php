<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacher = User::factory()->create([
            "user_id" => "12275012",
            "names" => "Soliver",
            "lastnames" => "Carpintero",
            "sex" => "F",
            "password" => bcrypt("12275012"),
            "telephone_number" => "04263180034",
            "email" => "sol@gmail.com",
            "date_of_birth" => "04/10/1997",
            "rol_fk" => 2,
            'pfg_fk' => 1
        ]);

        $project = $teacher->teacher_projects()->create([
            "name" => "Desarrollar un sistema informatico para el registro de habitantes de la comunidad Juana la Avanzadora",
            "resume" => "Este es un sistema desarrollado en la comunidad juana la avanzadora en vista de la ineficiancia a la hora de consultar la información",
            "pfg_fk" => 1,
            "kind_fk" => 1,
            "isPresent" => false,
        ]);
    }
}
