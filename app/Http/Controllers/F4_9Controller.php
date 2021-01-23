<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF4_9;
use App\Form_004_9;
use App\Facultade;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F4_9Export;
use Illuminate\Support\Collection;

class F4_9Controller extends Controller
{
    public function _construct(){

    }
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_004_9s as fo')
            ->join('facultades as fa','fo.id_f','=','fa.id_f')
            ->select('fo.idf4_9','fa.nombre_f','fo.hombres','fo.mujeres','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf4_9','desc')
            ->groupBy('fo.idf4_9','fa.nombre_f','fo.hombres','fo.mujeres','fo.total','fo.porcentaje','fo.gestion')
            ->paginate(12);
          return view('BienestarUniversitario.form_004_9.index',["registro"=>$registro,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $facultad = DB::table('facultades as fa')
        ->select('fa.nombre_f','fa.id_f')
        ->get();
        return view('BienestarUniversitario.form_004_9.create',["facultad"=>$facultad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF4_9 $request)
    {
           $registros = new Form_004_9;

            $id_f=$request->get('id_f');
            $hombres=$request->get('hombres');
            $mujeres=$request->get('mujeres');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_f)) {
                $registro=new Form_004_9();
                $registro->id_f=$id_f[$cont];
                $registro->hombres=$hombres[$cont];
                $registro->mujeres=$mujeres[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('BienestarUniversitario/form_004_9');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegistroF1_3 $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     $form_018_1=DB::table('form_018_1s')->where('id','=',$id)->delete();
   	return Redirect::to('ImprentaUniversitaria/form_018_1');}
     */
    public function destroy($id)
    {
         $registro=DB::table('form_004_9s')->where('idf4_9','=',$id)->delete();
    return Redirect::to('BienestarUniversitario/form_004_9');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F4_9Export, 'f4_9.xlsx');
    }
}
