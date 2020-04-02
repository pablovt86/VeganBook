<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
    protected $table = 'detalle_venta';
    protected $primaryKey='iddetalle_venta';
    public $timestamps=False;
    protected $fillable =[
      'idiventa',
      'idarticulo',
      'cantidad',
      'precio_venta',
      'descuento',
      
    ];
    protected $guarded=[];




}
