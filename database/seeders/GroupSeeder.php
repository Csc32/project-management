<?php

namespace Database\Seeders;

use App\Models\Projects;
use App\Models\User;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $project = Projects::all()->first();
        $student = User::all()->first()->with('role')->where('rol_fk', '=', 3)->first();

        var_dump($student);

        $project->student_groups()->create([
            'student_fk' => $student->id,
        ]);
    }
}
