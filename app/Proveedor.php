<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'persona';
    protected $primaryKey='idproveedor';
    public $timestamps=False;
    protected $fillable =[
      'tipo_persona',
      'nombre',
      'tipo_documento',
      'num_documento',
      'dirreccion',
      'telefono',
      'email'
    ];
    protected $guarded=[];
  }
  