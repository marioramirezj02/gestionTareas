<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tareas extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'completado', 'id_proyecto'];

    public function proyecto()
    {
        return $this->belongsTo(Proyectos::class);
    }
}
