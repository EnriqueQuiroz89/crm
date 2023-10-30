<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $table = 'actividades';
    // id	id_cliente	id_usuario	tipo_actividad	fecha_limite	resumen	descripcion	prioridad	creado_en
    protected $primaryKey = 'id';
    protected $fillable = ['id_cliente', 'id_usuario', 'tipo_actividad', 'fecha_limite', 'resumen', 'descripcion', 'prioridad'];
    protected $guarded = [];
    public $timestamps = false;
}
