<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Alumno extends Model
{
    //
    protected $primaryKey = 'idestudiante';
    protected $table = 'estudiantes';


    protected $fillable = [
        'idestudiante', 'nombres', 'apellidos', 'sexo','fec_nac','dni','grado','seccion'
    ];


    public function colegio()
    {
      //El primer argumento es el modelo, osea el alumno tiene su llave foranea que identifica a la clase Escuela
      //Segundo argumento es el foreign key que está en la tabla actual, osea en la tabla alumnos se tiene al fk de la tabla colegios_idcolegio
      //El tercer argumento es necesario si o si, representa a la llave primaria de la tabla de donde se extraen los datos, en este caso de la tabla colegios
      return $this->belongsTo('App\Escuela', 'colegios_idcolegio','idcolegio');
    }

    public function materiales(){

      return $this->belongsToMany('App\Material','estudiantes_materiales','estudiantes_idestudiantes','materiales_idmateriales')->withPivot('materiales_idmateriales','entregado','created_at');

    }



}
