<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $primarykey = 'idcolegios';
    protected $table = 'colegios';

    public function alumnos()
    {
      return $this->hasMany('App\Alumno','colegios_idcolegio');
    }


    public function distrito()
    {
      return $this->belongsTo('App\Distrito', 'distritos_iddistrito');
    }
}
