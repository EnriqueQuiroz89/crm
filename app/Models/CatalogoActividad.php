<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoActividad extends Model
{
    use HasFactory;

    protected $table = 'catalogo_actividades';
    protected $primaryKey = 'id';
    public $timestamps = false;

    // Agrega relaciones o métodos adicionales según sea necesario

    // public function actividad()
    // {
    //     return $this->hasMany(Actividad::class);
    // }
}
