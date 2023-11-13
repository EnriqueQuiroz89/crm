<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Actividad extends Model
{
    use HasFactory;

    protected $table = 'actividades';
    // id	id_cliente	id_usuario	tipo_actividad	fecha_limite	resumen	descripcion	prioridad	creado_en
    protected $primaryKey = 'id';
    protected $fillable = ['id_cliente', 'id_usuario', 'tipo_actividad', 'fecha_limite', 'resumen', 'descripcion', 'prioridad'];
    protected $guarded = [];
    public $timestamps = false;


    // public function catalogoActividad()
    // {
    //     return $this->belongsTo(CatalogoActividad::class);
    // }

    // En el modelo Actividad, establece la relación inversa con NotaActividad:
    public function notas()
    {
        return $this->hasMany(NotaActividad::class);
    }

    public function listadoActividadesParaCalendario()
    {
        $post = Actividad::with('catalogoActividad')->find(1);
        return $post;
    }
}
