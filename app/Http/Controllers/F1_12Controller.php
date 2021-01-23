<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_001_12;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF1_12;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F1_12Export;

use Illuminate\Support\Collection;

class F1_12Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_001_12s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf1_12','asc')
            ->paginate(3);
          return view('JefaturaDePersonal.form_001_12.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('JefaturaDePersonal.form_001_12.create');

    }
    public function store(RegistroF1_12 $request)
    {
           $registros = new Form_001_12;

            $contrato=$request->get('contrato');
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
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($contrato)) {
                $registro=new Form_001_12();
                $registro->contrato=$contrato[$cont];
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
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('JefaturaDePersonal/form_001_12');
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
         $registro=DB::table('form_001_12s')->where('idf1_12','=',$id)->delete();
    return Redirect::to('JefaturaDePersonal/form_001_12');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F1_12Export, 'f1_12.xlsx');
    }
}
