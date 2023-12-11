<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DireccionUsuario extends Model
{
    use HasFactory;

    protected $table = 'direccion_usuarios';//Prote

    protected $fillable = [
        'id',
        'direccionId',
        'usuarioId',

    ];

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = false;


}
