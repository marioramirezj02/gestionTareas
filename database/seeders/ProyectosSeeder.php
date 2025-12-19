<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proyectos;
use App\Models\User;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        Proyectos::factory()->count(3)->create([
            'id_usuario' => $user->id,
        ]);
    }
}
