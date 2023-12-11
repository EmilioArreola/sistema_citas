<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DireccionCliente extends Model
{
    use HasFactory;

    protected $table = 'direccion_clientes';//Prote

    protected $fillable = [
        'id',
        'direccionId',
        'clienteId',

    ];

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = false;


}
