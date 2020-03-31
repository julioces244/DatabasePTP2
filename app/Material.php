<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{

    protected $primarykey = 'idmaterial';
    protected $table = 'materiales';


    public function estudiantes(){
      return $this->belongsToMany('App\Alumno')->withPivot('entregado');
    }

}
