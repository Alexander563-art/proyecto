<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalle_venta';
    protected $primaryKey = 'iddetalle_venta';
    public $timestamps = false;

    //campos que van a recibir un valor

    protected $fillable = [

        'idventa',
        'idarticulo',
        'cantidad',
        'precio_venta',
        'descuento',

    ];
}
