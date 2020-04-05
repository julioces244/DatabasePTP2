<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $primaryKey = 'idambiente';
    protected $table = 'ambientes';


    public function colegio()
    {
      return $this->belongsTo('App\Escuela', 'colegios_idcolegio');
    }

}
