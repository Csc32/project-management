<?php

namespace Database\Seeders;

use App\Models\KindProject as ModelsKindProject;
use Illuminate\Database\Seeder;

class kindProject extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ModelsKindProject::factory()->create([
            'name' => 'Tecnico Superior Universitario',
            'abbr' => 'TSU',
        ]);

        ModelsKindProject::factory()->create([
            'name' => 'Licenciado',
            'abbr' => 'LIC',
        ]);
    }
}
