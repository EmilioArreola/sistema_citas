<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'mascotas';//Prote

    protected $fillable = [
        'idMascota',
        'nombre',
        'especie',
        'raza',
        'edad',
        'clienteId',
    ];

    protected $primaryKey = 'idMascota';

    public $incrementing = true;

    public $timestamps = false;


}
