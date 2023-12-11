<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'citas';//Prote

    protected $fillable = [
        'idCitas',
        'clienteId',
        'fechaCita',
        'horaCita',
    ];

    protected $primaryKey = 'idCitas';

    public $incrementing = true;

    public $timestamps = false;


}
