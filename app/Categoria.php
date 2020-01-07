<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey='idcategoria';
    public $timestamps=False;
    protected $fillable =[
      'nombre',
      'descripcion',
      'condicion'
    ];
    protected $guarded=[];
}
