<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulo';
    protected $primaryKey = 'idarticulo';
    public $timestamps = false;

    //campos que van a recibir un valor

    protected $fillable = [
        'idcategoria',
        'codigo',
        'nombre',
        'stock',
        'descripcion',
        'imagen',
        'estado'

    ];
}
