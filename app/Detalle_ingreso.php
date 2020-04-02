<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_ingreso extends Model
{
    protected $table = 'detalle_ingreso';
    protected $primaryKey='iddetalle_ingreso';
    public $timestamps=False;
    protected $fillable =[
      'idingreso',
      'idarticulo',
      'cantidad',
      'precio_compra',
      'precio_venta',
      
    ];
    protected $guarded=[];



}
