<?php

namespace App\Models;
use App\Models\ConvocatoriaDocumento;
use App\Models\Requisito;
use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $primaryKey = 'id_convocatoria';

    protected $fillable = [
        'id_usuario',
        'id_postulante',
        'id_tipo_actividad',
        'fecha_inicio',
        'fecha_fin',
        'bases',
        'estado',
        'resolucion',
        'nombre',
    ];

    protected $dates = ['fecha_inicio', 'fecha_fin'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
    public function documentos()
    {
        return $this->hasMany(ConvocatoriaDocumento::class, 'id_convocatoria');
    }
    public function postulante()
    {
        return $this->belongsTo(Postulante::class, 'id_postulante', 'id_alumno');
    }

    public function tipoActividad()
    {
       return $this->belongsTo(TipoActividad::class, 'id_tipo_actividad', 'id_actividad');
    }

    public function requisitos()
    {
         return $this->hasMany(Requisito::class, 'id_convocatoria', 'id_convocatoria');
    }
}
