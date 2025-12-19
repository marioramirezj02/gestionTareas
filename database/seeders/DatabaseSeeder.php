<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Proyectos;
use App\Models\Tareas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(1)->create();

 
        Proyectos::create(['nombre' => 'Proyecto 1', 'id_usuario' => User::first()->id,'descripcion' => 'texto ejemplo primer proyecto']);        
        Proyectos::create(['nombre' => 'Proyecto 2', 'id_usuario' => User::first()->id,'descripcion' => 'texto ejemplo segundo proyecto']);
        Proyectos::create(['nombre' => 'Proyecto 3', 'id_usuario' => User::first()->id,'descripcion' => 'texto ejemplo tercer proyecto']);


        Tareas::create(['titulo' => 'Tarea 1 de Proyecto 1', 'id_proyecto' => Proyectos::orderBy('id','asc')->take(1)->first()->id, 'completado' => false]);
        Tareas::create(['titulo' => 'Tarea 2 de Proyecto 1', 'id_proyecto' => Proyectos::orderBy('id','asc')->take(1)->first()->id, 'completado' => false]);
        Tareas::create(['titulo' => 'Tarea 3 de Proyecto 1', 'id_proyecto' => Proyectos::orderBy('id','asc')->take(1)->first()->id, 'completado' => false]);

        Tareas::create(['titulo' => 'Tarea 1 de Proyecto 2', 'id_proyecto' => Proyectos::orderBy('id','asc')->skip(1)->take(1)->first()->id, 'completado' => false]);
        Tareas::create(['titulo' => 'Tarea 2 de Proyecto 2', 'id_proyecto' => Proyectos::orderBy('id','asc')->skip(1)->take(1)->first()->id, 'completado' => false]);
        Tareas::create(['titulo' => 'Tarea 3 de Proyecto 2', 'id_proyecto' => Proyectos::orderBy('id','asc')->skip(1)->take(1)->first()->id, 'completado' => false]);

        Tareas::create(['titulo' => 'Tarea 1 de Proyecto 3', 'id_proyecto' => Proyectos::orderBy('id','asc')->skip(2)->take(1)->first()->id, 'completado' => false]);
        Tareas::create(['titulo' => 'Tarea 2 de Proyecto 3', 'id_proyecto' => Proyectos::orderBy('id','asc')->skip(2)->take(1)->first()->id, 'completado' => false]);
        Tareas::create(['titulo' => 'Tarea 3 de Proyecto 3', 'id_proyecto' => Proyectos::orderBy('id','asc')->skip(2)->take(1)->first()->id, 'completado' => false]);


        //  Fallos de foreign keys en los factory TODO 
        
        //Proyectos::factory(3)->create();
        //Tareas::factory(9)->create();

    }
}
