<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $attributes = ["Administrador", "Profesor", "Estudiante"];
    public function run(): void
    {
        //
        foreach ($this->attributes as $attr) {
            Roles::factory()->create(
                [
                    "name" => $attr
                ]
            );
        }
    }
}
