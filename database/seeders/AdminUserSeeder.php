<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->create([
            "user_id" => "123456",
            "names" => "Aministrador",
            "lastnames" => "Administrador",
            "password" => bcrypt("123456"),
            "telephone_number" => "04161234567",
            "email" => "administrador@gmail.com",
            "rol_id" => 1
        ]);
    }
}
