<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proyectos::all()->each(function($proyecto){
            Task::factory()->count(5)->create([
                'id_proyecto' => $proyecto->id,
            ]);
        });
    }
}
