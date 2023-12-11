<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direcciones';//Prote

    protected $fillable = [
        'idDireccion',
        'colonia',
        'calle',
        'ciudad',
        'numeroCasa',

    ];

    protected $primaryKey = 'idDireccion';

    public $incrementing = true;

    public $timestamps = false;


}
