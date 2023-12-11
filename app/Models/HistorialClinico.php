<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialClinico extends Model
{
    use HasFactory;

    protected $table = 'historial_clinicos';//Prote

    protected $fillable = [
        'idHistorial',
        'fechaUltimaVisita',
        'diagnosticoAnterior',
        'cirujiaPrevia',
        'condicionCronica',
        'alergia',
        'tratamiento',
        'vacuna',
        'fechaDesparatizacion',
        'mascotaId',
    ];

    protected $primaryKey = 'idHistorial';

    public $incrementing = true;

    public $timestamps = false;


}
