<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'idcategoria';
    public $timestamps = false;

    //campos que van a recibir un valor

    protected $fillable = [
        'nombre',
        'descripcion',
        'condicion'

    ];
}
