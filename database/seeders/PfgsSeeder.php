<?php

namespace Database\Seeders;

use App\Models\Pfgs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PfgsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    protected $attributes = ["Informatica", "Agroecologia", "Arquitectura", "Salud Publica", "Gestion Ambiental"];
    public function run(): void
    {
        //
        foreach ($this->attributes as $attr) {
            Pfgs::factory()->create(
                [
                    "name" => strtoupper($attr)
                ]
            );
        }
    }
}
