<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF1_15;
use App\Form_001_15;
use App\Profecione;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F1_15Export;

use Illuminate\Support\Collection;

class F1_15Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_001_15s as fo')
            ->join('profeciones as p','fo.id_p','=','p.id_p')
            ->select('fo.idf1_15','p.nombre_p','fo.msc','fo.esp','fo.dip','fo.lic','fo.egr','fo.ts','fo.prof','fo.tm','fo.es','fo.emp','fo.obr','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf1_15','asc')
            ->paginate(53);
          return view('JefaturaDePersonal.form_001_15.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	$profecion = DB::table('profeciones as p')
        ->select('p.nombre_p','p.id_p')
        ->get();
        return view('JefaturaDePersonal.form_001_15.create',["profecion"=>$profecion]);

    }
    public function store(RegistroF1_15 $request)
    {
           $registros = new Form_001_15;

            $id_p=$request->get('id_p');
            $msc=$request->get('msc');
            $esp=$request->get('esp');
            $dip=$request->get('dip');
            $lic=$request->get('lic');
            $egr=$request->get('egr');
            $ts=$request->get('ts');
            $prof=$request->get('prof');
            $tm=$request->get('tm');
            $es=$request->get('es');
            $emp=$request->get('emp');
            $obr=$request->get('obr');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_p)) {
                $registro=new Form_001_15();
                $registro->id_p=$id_p[$cont];
                $registro->msc=$msc[$cont];
                $registro->esp=$esp[$cont];
                $registro->dip=$dip[$cont];
                $registro->lic=$lic[$cont];
                $registro->egr=$egr[$cont];
                $registro->ts=$ts[$cont];
                $registro->prof=$prof[$cont];
                $registro->tm=$tm[$cont];
                $registro->es=$es[$cont];
                $registro->emp=$emp[$cont];
                $registro->obr=$obr[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('JefaturaDePersonal/form_001_15');
    }
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
    public function update(RegistroF1_6 $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $registro=DB::table('form_001_15s')->where('idf1_15','=',$id)->delete();
    return Redirect::to('JefaturaDePersonal/form_001_15');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F1_15Export, 'f1_15.xlsx');
    }
}
