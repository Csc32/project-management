<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $attributes = ['comunitario', 'educacion', 'institucional', 'UBV'];

    public function run(): void
    {
        //
        foreach ($this->attributes as $attr) {
            Category::factory()->create([
                'category_name' => $attr,
            ]);
        }
    }
}
