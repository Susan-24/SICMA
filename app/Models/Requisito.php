<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    protected $table = 'requisitos';

    protected $primaryKey = 'id_requisito';

    protected $fillable = ['nombre_requisito', 'descripcion', 'id_convocatoria'];

    // Relación con Convocatoria
    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class, 'id_convocatoria', 'id_convocatoria');
    }
}
