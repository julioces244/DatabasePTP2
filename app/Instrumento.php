<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'idinstrumento';
    protected $table = 'instrumentos';

    //$fillable fundamental para importar el excel a la bd
    protected $fillable = ['idinstrumento','especialidad','cantidad','unidades','descripcion','serie','codigoptp','codigo','estado','ambientes_idambiente'];

    public function ambiente()
    {
      return $this->belongsTo('App\Ambiente', 'ambientes_idambiente');
    }
}
