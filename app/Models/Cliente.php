<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';//Prote

    protected $fillable = [
        'idCliente',
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'correo',
        'telefono',
        'estado',
    ];

    protected $primaryKey = 'idCliente';

    public $incrementing = true;

    public $timestamps = false;


}
