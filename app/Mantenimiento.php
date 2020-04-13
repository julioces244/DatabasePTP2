<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
  protected $guarded = [];
  protected $primaryKey = 'idmantenimiento';
  protected $table = 'mantenimientos';

  public function colegio()
  {
    return $this->belongsTo('App\Colegio', 'colegios_idcolegio');
  }
}
