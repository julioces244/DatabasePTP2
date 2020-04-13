<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Colegio;
use Carbon\Carbon;

class MantenimientoController extends Controller
{
    public function obtenerfechas($idcolegio){

      try{
        $date = Carbon::now();
        //$date = $date->format('d-m-Y');

        $mantenimientos = DB::table('mantenimientos')->where('colegios_idcolegio',$idcolegio)->get();
        return $mantenimientos;
        //return response()->json(['mantenimiento' => $mantenimientos, 'fecha' => $date]);

      }catch(\Exception $e){



      }


    }
}
