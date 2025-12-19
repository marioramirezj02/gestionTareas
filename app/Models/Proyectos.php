<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyectos extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'descripcion', 'id_usuario'];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function tareas()
    {
        return $this->hasMany(Tareas::class);
    }
}
