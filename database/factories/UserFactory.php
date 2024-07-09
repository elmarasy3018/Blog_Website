<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'isAdmin' => false,
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(3)->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now(3)->format('Y-m-d H:i:s')
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
