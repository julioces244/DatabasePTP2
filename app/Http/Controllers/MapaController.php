<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use DB;
use Carbon\Carbon;
use App\Ancash;
use App\Province;

use App\Exports\ProvinciasExport;
use Maatwebsite\Excel\Facades\Excel;

class MapaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $provincias = DB::table('ancashprovinces')->get();
        $nombres = DB::table('ancashprovinces')->select('nombre')->get();
        $ids = DB::table('ancashprovinces')->select('idancashprovinces')->get();

        $arraygeneral = [];

        $arraynombres =  get_object_vars($nombres);
        $arrayids = (array)$ids;
        //dd($arraynombres);
        //dd($provincias);


        //$array = new Array[3];
        $porcentajeprovincias = [];
        foreach($provincias as $provincia){
          array_push($porcentajeprovincias,$provincia->idancashprovinces);


        }

        array_push($porcentajeprovincias,$provincia->nombre);
        array_push($porcentajeprovincias, (round(($provincia->casos/$provincia->poblacion)*100 )));



        //array_push($arraygeneral,$porcentajeprovincias);
      //  array_push($arraygeneral,$arraynombres);
        //array_push($arraygeneral,$arrayids);
        //$porcentajeprovincias = $ids;




        //array_push($provincias,$porcentajeprovincias);
        //dd($porcentajeprovincias);


        //$porcentajeprovincias = ($provinciascontagios/$provinciaspoblacion)*100;
        //dd($porcentajeprovincias);
        return view('ancash/provincias_ancash')->with('provincias',$provincias)->with('porcentajeprovincias',$porcentajeprovincias)
        ->with('nombres',$nombres)->with('ids',$ids);
    }

    public function ingresardatos(){

      return view('ancash/ingresar_datos');
    }

    public function ancash_graficas()
    {
        //

        $fechas2 = DB::table('ancashcasos')->orderBy('fechaingreso')->get();
        //dd($fechas2);
        $fechas = [];
        //$datas["all"]="";

        foreach($fechas2 as $fecha2){
          //dd($fecha2->fechaingreso);
          array_push($fechas, strftime("%d%B", strtotime(($fecha2->fechaingreso)))) ;
        }

        $poblaciontotal = 1177080;

        $porcentaje = [];
        foreach($fechas2 as $fecha2){
          //dd($fecha2->fechaingreso);
          array_push($porcentaje, round(((($fecha2->casos)/$poblaciontotal)*100),5)) ;
        }


        //dd($porcentaje);


        $fechadate = DB::table('ancashcasos')->orderBy('fechaingreso','DESC')->first();
        $fechaultima = $fechadate->fechaingreso;
        //dd($fechadate->fechaingreso);
        //$fechaultima = $fechadate2->format('Y-m-d');
        return view('ancash/ancash_graficas')->with('fechas',$fechas)->with('fechas2',$fechas2)->with('fechaultima',$fechaultima)
        ->with('porcentaje',$porcentaje);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $ancash = new Ancash();
      $ancash->fechaingreso = $request->input('fechaingreso');
      $ancash->casos = $request->input('casos');
      $ancash->fallecidos = $request->input('fallecidos');
      $ancash->departamento = $request->input('departamento');
      $ancash->save();

      //$fechas = DB::table('ancashcasos')->orderBy(fechaingreso)->get();
      //$fechaultima = DB::table('ancashcasos')->orderBy(fechaingreso)->first();
      return redirect('/ancash_graficas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $provi = DB::table('ancashprovinces')->where('idancashprovinces',$id)->first();
      //dd($provi);
      return view('ancash/mostrar_provincia')->with('provi',$provi);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $provi = Province::find($id);
      $provi->poblacion = $request->input('poblacion');
      $provi->casos = $request->input('casos');
      $provi->recuperados = $request->input('recuperados');
      $provi->fallecidos = $request->input('fallecidos');
      $provi->save();
     return redirect("/ancash_provincias");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function export()
    {
        return Excel::download(new ProvinciasExport, 'provincias_ancash.xlsx');
    }
}
