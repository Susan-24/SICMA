<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Modalidad extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'modalidad';

    // Clave primaria
    protected $primaryKey = 'id_modalidad';

    // Laravel por defecto usa "id" como clave primaria autoincremental,
    // así que especificamos la tuya
    public $incrementing = true;
    protected $keyType = 'int';

    // Campos asignables masivamente
    protected $fillable = [
        'nombre_modalidad',
        'descripcion'
    ];

    // Relación: una modalidad tiene muchos tipos de actividad
    public function tipoActividades()
    {
        return $this->hasMany(TipoActividad::class, 'id_modalidad', 'id_modalidad');
    }
}
