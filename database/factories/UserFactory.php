<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    public $sex = ["M", "F"];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => rand(0, 1000),
            "names" => strtoupper(fake()->name()),
            "pfg_fk" => rand(1, 5),
            "sex" => $this->sex[rand(0, 1)],
            "lastnames" => strtoupper(fake()->lastName()),
            "date_of_birth" => fake()->date(),
            "telephone_number" => fake()->phoneNumber(),
            "email" => fake()->email(),
            "password" => fake()->password(8),
            "rol_fk" => rand(1, 3),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(
            fn (array $attributes) => [
            'email_verified_at' => null,
            ]
        );
    }
}
