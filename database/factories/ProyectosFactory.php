<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Proyectos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyectos>
 */
class ProyectosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Proyectos::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(4),
            'descripcion' => $this->faker->paragraph(3),       
        ];
    }
}
