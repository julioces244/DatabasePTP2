<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'idinstrumento';
    protected $table = 'instrumentos';
    protected $fillable = ['idinstrumento','especialidad','cantidad','unidades','descripcion','serie','codigoptp','codigo','estado','ambientes_idambiente'];

}
