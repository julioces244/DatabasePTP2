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


        $bolognesi = DB::table('ancashprovinces')->where('idancashprovinces',1)->first();
        $pcbolognesi = round(($bolognesi->casos/$bolognesi->poblacion)*100,4);

        $carhuaz = DB::table('ancashprovinces')->where('idancashprovinces',2)->first();
        $pccarhuaz = round(($carhuaz->casos/$carhuaz->poblacion)*100,4);

        $casma = DB::table('ancashprovinces')->where('idancashprovinces',3)->first();
        $pccasma = round(($casma->casos/$casma->poblacion)*100,4);

        $corongo = DB::table('ancashprovinces')->where('idancashprovinces',4)->first();
        $pccorongo = round(($corongo->casos/$corongo->poblacion)*100,4);

        $huaraz = DB::table('ancashprovinces')->where('idancashprovinces',5)->first();
        $pchuaraz = round(($huaraz->casos/$huaraz->poblacion)*100,4);

        $huari = DB::table('ancashprovinces')->where('idancashprovinces',6)->first();
        $pchuari = round(($huari->casos/$huari->poblacion)*100,4);

        $huarmey = DB::table('ancashprovinces')->where('idancashprovinces',7)->first();
        $pchuarmey = round(($huarmey->casos/$huarmey->poblacion)*100,4);

        $huaylas = DB::table('ancashprovinces')->where('idancashprovinces',8)->first();
        $pchuaylas = round(($huaylas->casos/$huaylas->poblacion)*100,4);

        $luzurriaga = DB::table('ancashprovinces')->where('idancashprovinces',9)->first();
        $pcluzurriaga = round(($luzurriaga->casos/$luzurriaga->poblacion)*100,4);

        $pallasca = DB::table('ancashprovinces')->where('idancashprovinces',10)->first();
        $pcpallasca = round(($pallasca->casos/$pallasca->poblacion)*100,4);

        $pomabamba = DB::table('ancashprovinces')->where('idancashprovinces',11)->first();
        $pcpomabamba = round(($pomabamba->casos/$pomabamba->poblacion)*100,4);

        $recuay = DB::table('ancashprovinces')->where('idancashprovinces',12)->first();
        $pcrecuay = round(($recuay->casos/$recuay->poblacion)*100,4);

        $santa = DB::table('ancashprovinces')->where('idancashprovinces',13)->first();
        $pcsanta = round(($santa->casos/$santa->poblacion)*100,4);

        $sihuas = DB::table('ancashprovinces')->where('idancashprovinces',14)->first();
        $pcsihuas = round(($sihuas->casos/$sihuas->poblacion)*100,4);

        $yungay = DB::table('ancashprovinces')->where('idancashprovinces',15)->first();
        $pcyungay = round(($yungay->casos/$yungay->poblacion)*100,4);

        $aija = DB::table('ancashprovinces')->where('idancashprovinces',16)->first();
        $pcaija = round(($aija->casos/$aija->poblacion)*100,4);

        $fitzcarrald = DB::table('ancashprovinces')->where('idancashprovinces',17)->first();
        $pcfitzcarrald = round(($fitzcarrald->casos/$fitzcarrald->poblacion)*100,4);

        $ocros = DB::table('ancashprovinces')->where('idancashprovinces',18)->first();
        $pcocros = round(($ocros->casos/$ocros->poblacion)*100,4);

        $raymondi = DB::table('ancashprovinces')->where('idancashprovinces',19)->first();
        $pcraymondi = round(($raymondi->casos/$raymondi->poblacion)*100,4);

        $asuncion = DB::table('ancashprovinces')->where('idancashprovinces',20)->first();
        $pcasuncion = round(($asuncion->casos/$asuncion->poblacion)*100,4);

        //dd($pcsanta);



        //array_push($arraygeneral,$porcentajeprovincias);
      //  array_push($arraygeneral,$arraynombres);
        //array_push($arraygeneral,$arrayids);
        //$porcentajeprovincias = $ids;




        //array_push($provincias,$porcentajeprovincias);
        //dd($porcentajeprovincias);


        //$porcentajeprovincias = ($provinciascontagios/$provinciaspoblacion)*100;
        //dd($porcentajeprovincias);
        return view('ancash/provincias_ancash')->with('provincias',$provincias)->with('porcentajeprovincias',$porcentajeprovincias)
        ->with('nombres',$nombres)->with('ids',$ids)
        ->with('santa',$santa)->with('pcsanta',$pcsanta)
        ->with('bolognesi',$bolognesi)->with('pcbolognesi',$pcbolognesi)
        ->with('carhuaz',$carhuaz)->with('pccarhuaz',$pccarhuaz)
        ->with('casma',$casma)->with('pccasma',$pccasma)
        ->with('corongo',$corongo)->with('pccorongo',$pccorongo)
        ->with('huaraz',$huaraz)->with('pchuaraz',$pchuaraz)
        ->with('huari',$huari)->with('pchuari',$pchuari)
        ->with('huarmey',$huarmey)->with('pchuarmey',$pchuarmey)
        ->with('huaylas',$huaylas)->with('pchuaylas',$pchuaylas)
        ->with('luzurriaga',$luzurriaga)->with('pcluzurriaga',$pcluzurriaga)
        ->with('pallasca',$pallasca)->with('pcpallasca',$pcpallasca)
        ->with('pomabamba',$pomabamba)->with('pcpomabamba',$pcpomabamba)
        ->with('recuay',$recuay)->with('pcrecuay',$pcrecuay)
        ->with('sihuas',$sihuas)->with('pcsihuas',$pcsihuas)
        ->with('yungay',$yungay)->with('pcyungay',$pcyungay)
        ->with('aija',$aija)->with('pcaija',$pcaija)
        ->with('fitzcarrald',$fitzcarrald)->with('pcfitzcarrald',$pcfitzcarrald)
        ->with('ocros',$ocros)->with('pcocros',$pcocros)
        ->with('raymondi',$raymondi)->with('pcraymondi',$pcraymondi)
        ->with('asuncion',$asuncion)->with('pcasuncion',$pcasuncion);
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
        $ultimoscasos = $fechadate->casos;
        $ultimosfallecidos = $fechadate->fallecidos;
        $ultimoactualizado = $fechadate->created_at;
        //dd($fechadate->fechaingreso);
        //$fechaultima = $fechadate2->format('Y-m-d');
        return view('ancash/ancash_graficas')->with('fechas',$fechas)->with('fechas2',$fechas2)->with('fechaultima',$fechaultima)
        ->with('porcentaje',$porcentaje)->with('ultimoscasos',$ultimoscasos)->with('ultimosfallecidos',$ultimosfallecidos)->with('ultimoactualizado',$ultimoactualizado);
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
