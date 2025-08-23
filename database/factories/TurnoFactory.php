<?php

namespace Database\Factories;

use App\Models\Automovil;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turno>
 */
class TurnoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fecha' => fake()->dateTimeBetween('+1 days', '+2 months')->format('Y-m-d'),
            'hora' => fake()->time('H:i'),
            'estado' => fake()->randomElement(['pendiente', 'confirmado', 'cancelado']),
            'automovil_id' => Automovil::inRandomOrder()->first()->id,
            'servicio_id' => Servicio::inRandomOrder()->first()->id,
        ];
    }
}
