<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use App\Alumno;
use App\Escuela;
use App\Material;
use App\Exports\EstudiantesExport;
use Maatwebsite\Excel\Facades\Excel;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      try{

        //$alumnos = Alumno::All();
        $alumnos = DB::table('estudiantes')->get();
        return view('listado_alumnos')->with('alumnos',$alumnos);

        //return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        //return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        try{
          $colegios = DB::table('colegios')->get();

          return view('crear_alumno')->with('colegios',$colegios);

        }catch(\Exception $e){

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


          //$alumno = Alumno::create($request->all());
          $alumno = new Alumno();
          $alumno->nombres = $request->input('nombres');
        	$alumno->apellidos = $request->input('apellidos');
        	$alumno->sexo = $request->input('sexo');
          $alumno->dni = $request->input('dni');
          $alumno->fec_nac = $request->input('fec_nac');
          $alumno->grado = $request->input('grado');
          $alumno->seccion = $request->input('seccion');
          $alumno->comentarios = $request->input('comentarios');
          $alumno->colegios_idcolegio = $request->input('colegios_idcolegio');
          //dd('sad');
        	$alumno->save();

            if($alumno){
              $data_alumno = redirect('all_students')->with('success','El estudiante ha sido agregado');
            }else{
              $data_alumno = redirect('all_students')->with('danger','Error de datos, porfavor intente de nuevo.');
            }

          return $data_alumno;



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idestudiante)
    {

        $estudiante = Alumno::find($idestudiante);
        $materiales = DB::table('materiales')->get();
        return view('ver_alumno')->with('estudiante',$estudiante)->with('materiales',$materiales);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idestudiante)
    {

          $alumno = Alumno::find($idestudiante);
          $alumno->delete();

          return back()->with('msj','Estudiante eliminado correctamente!');

    }


    public function export()
    {
        return Excel::download(new EstudiantesExport, 'estudiantes_pisco.xlsx');
    }

    public function store_estudiante_material(Request $request, $idestudiante){

      $materialverify = $request->input('material');

      dd(key($materialverify));

      //dd($materialverify);
      $checkmateriales = new Material();
      $checkmateriales->idmaterial = $request->input('idmaterial');

    //  $valor

        $estudiante = Alumno::find($idestudiante);


      foreach($materialverify as $material){
          if($material==0){
            //$material= [$material[]];
            $valor=2;
            $material = key($materialverify+1);
          }else{
            $valor=1;
          }
          $estudiante->materiales()->attach($material, ['entregado' => $valor]);

      }

      return back();

      //$estudiante->materiales()->attach($roleId, ['expires' => $expires]);


    }
}
