<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Automovil>
 */
class AutomovilFactory extends Factory
{
    public function definition(): array
    {
        return [
            'marca' => fake()->randomElement(['Toyota', 'Ford', 'Chevrolet', 'Peugeot', 'Renault']),
            'modelo' => fake()->word(),
            'anio' => fake()->numberBetween(2000, 2025),
            'patente' => strtoupper(fake()->bothify('??###??')),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
