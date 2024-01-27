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
        User::factory()->create(
            [
                "user_id" => "123456",
                "names" => strtoupper("Administrador"),
                "lastnames" => strtoupper("Administrador"),
                "sex" => "M",
                "password" => bcrypt("123456"),
                "telephone_number" => "04161234567",
                "email" => "administrador@gmail.com",
                "date_of_birth" => "01/11/2002",
                "rol_fk" => 1
            ]
        );
    }
}
