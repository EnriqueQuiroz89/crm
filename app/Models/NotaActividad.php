<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaActividad extends Model
{
    use HasFactory;
    protected $table = 'notas_actividad';

    protected $fillable = [
        'actividad_id',
        'contenido',
    ];

    public function evento()
    {
        return $this->belongsTo(Actividad::class);
    }


}
