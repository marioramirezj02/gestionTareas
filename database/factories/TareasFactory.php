<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tareas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tareas>
 */
class TareasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Tareas::class;

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'completado' => $this->faker->boolean(),        
        ];
    }
}
