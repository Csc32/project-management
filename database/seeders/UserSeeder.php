<?php

namespace Database\Seeders;

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

        User::factory()->create([
            "user_id" => "29964042",
            "names" => "Carlos",
            "lastnames" => "Sanzonetty",
            "password" => bcrypt("29964042"),
            "telephone_number" => "04263192920",
            "email" => "carlos@gmail.com",
            "rol_id" => 3
        ]);
    }
}
