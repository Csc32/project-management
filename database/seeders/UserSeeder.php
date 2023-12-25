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
            "sex" => "M",
            "password" => bcrypt("29964042"),
            "telephone_number" => "04263192920",
            "email" => "carlos@gmail.com",
            "date_of_birth" => "01/11/2002",
            "rol_fk" => 3,
            'pfg_fk' => 1
        ]);
    }
}
