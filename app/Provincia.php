<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $primaryKey = 'idprovincia';
    protected $table = 'provincias';


    public function distritos()
    {
      return $this->hasMany('App\Distrito','provincias_idprovincia');
    }

}
