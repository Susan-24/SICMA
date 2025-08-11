<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConvocatoriaDocumento extends Model
{
    protected $table = 'convocatoria_documentos';

    protected $primaryKey = 'id'; // Por defecto es 'id', pero lo pongo explícito

    protected $fillable = [
        'id_convocatoria',
        'tipo',
        'nombre_archivo',
        'ruta_archivo',
    ];

    // Relación inversa: un documento pertenece a una convocatoria
    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class, 'id_convocatoria');
    }
    public function documentos()
{
    return $this->hasMany(ConvocatoriaDocumento::class, 'id_convocatoria');
}
}
