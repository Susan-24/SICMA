<?php

namespace App\Models;
use App\Models\Modalidad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class TipoActividad extends Model
{
    use HasFactory;

    protected $table = 'tipo_actividad';
    protected $primaryKey = 'id_actividad';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre_actividad',
        'descripcion',
        'id_modalidad'
    ];

    public function modalidad()
    {
        return $this->belongsTo(Modalidad::class, 'id_modalidad', 'id_modalidad');
    }
    public function convocatorias()
    {
        return $this->hasMany(Convocatoria::class, 'id_tipo_actividad', 'id_actividad');
    }
}
