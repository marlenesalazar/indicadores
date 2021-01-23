<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_010_2;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF10_2;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F10_2Export;
use Illuminate\Support\Collection;

class F10_2Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_010_2s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf10_2','asc')
            ->paginate(8);
          return view('DAF.form_010_2.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('DAF.form_010_2.create');

    }
    public function store(RegistroF10_2 $request)
    {
           $registros = new Form_010_2;

            $fte=$request->get('fte');
            $descripcion=$request->get('descripcion');
            $presupuestos=$request->get('presupuestos');
            $ejecucion=$request->get('ejecucion');
            $percibido=$request->get('percibido');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($fte)) {
                $registro=new Form_010_2();
                $registro->fte=$fte[$cont];
                $registro->descripcion=$descripcion[$cont];
                $registro->presupuestos=$presupuestos[$cont];
                $registro->ejecucion=$ejecucion[$cont];
                $registro->percibido=$percibido[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('DAF/form_010_2');
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
         $registro=DB::table('form_010_2s')->where('idf10_2','=',$id)->delete();
    return Redirect::to('DAF/form_010_2');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F10_2Export, 'f10_2.xlsx');
    }
}
