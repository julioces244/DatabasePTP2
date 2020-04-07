<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\InstrumentosImport;
use App\Instrumento;
use App\Ambiente;


class InstrumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function importinstrumentos()
    {
        Excel::import(new InstrumentosImport, 'files/instrumentos.xlsx');

        return redirect('/')->with('success', 'All good!');
    }


    public function index()
    {

    }


    public function instrumentosporid($idambiente){

      try{

        $instrumentos = DB::table('instrumentos')->where('ambientes_idambiente',$idambiente)->get();
        return $instrumentos;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){



      }

    }

    public function instrumentospornombre($codigoambiente){

      try{
        $idambiente = DB::table('ambientes')->where('codigo',$codigoambiente)->value('idAmbiente');

        $instrumentos = DB::table('instrumentos')->where('ambientes_idambiente',$idambiente)->get();
        return $instrumentos;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){



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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        //
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
}
