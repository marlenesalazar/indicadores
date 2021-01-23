<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_001_7;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF1_7;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F1_7Export;

use Illuminate\Support\Collection;

class F1_7Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_001_7s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf1_7','asc')
            ->paginate(3);
          return view('JefaturaDePersonal.form_001_7.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('JefaturaDePersonal.form_001_7.create');

    }
    public function store(RegistroF1_7 $request)
    {
           $registros = new Form_001_7;

            $contrato=$request->get('contrato');
            $hombres=$request->get('hombres');
            $mujeres=$request->get('mujeres');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($contrato)) {
                $registro=new Form_001_7();
                $registro->contrato=$contrato[$cont];
                $registro->hombres=$hombres[$cont];
                $registro->mujeres=$mujeres[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('JefaturaDePersonal/form_001_7');
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
         $registro=DB::table('form_001_7s')->where('idf1_7','=',$id)->delete();
    return Redirect::to('JefaturaDePersonal/form_001_7');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F1_7Export, 'f1_7.xlsx');
    }
}
