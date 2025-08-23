<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servicio>
 */
class ServicioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => fake()->randomElement([
                'Cambio de aceite',
                'Alineación y balanceo',
                'Revisión de frenos',
                'Diagnóstico eléctrico',
                'Service general'
            ]),
            'descripcion' => fake()->sentence(),
            'precio' => fake()->randomFloat(2, 1000, 8000),
        ];
    }
}
