<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $primaryKey = 'iddistrito';
    protected $table = 'distritos';


    public function escuelas()
    {
      return $this->hasMany('App\Escuela','distritos_iddistrito');
    }


    public function provincia()
    {
      return $this->belongsTo('App\Provincia', 'provincias_idprovincia');
    }
}
