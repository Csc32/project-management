<?php

namespace Database\Seeders;

use App\Models\Projects;
use App\Models\students;
use App\Models\teachers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $project = Projects::factory();
        $project->hasStudents(1);
    }
}
