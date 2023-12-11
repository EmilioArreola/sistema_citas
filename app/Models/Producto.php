<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';//Prote

    protected $fillable = [
        'idProducto',
        'nombre',
        'descripcion',
        'fechaCaducidad',
        'precio',
        'stock',
    ];

    protected $primaryKey = 'idProducto';

    public $incrementing = true;

    public $timestamps = false;


}
