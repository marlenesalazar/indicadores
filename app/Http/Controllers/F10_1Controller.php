<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_010_1;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF10_1;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F10_1Export;
use Illuminate\Support\Collection;

class F10_1Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_010_1s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf10_1','asc')
            ->paginate(8);
          return view('DAF.form_010_1.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('DAF.form_010_1.create');

    }
    public function store(RegistroF10_1 $request)
    {
           $registros = new Form_010_1;

            $fte=$request->get('fte');
            $descripcion=$request->get('descripcion');
            $valor1=$request->get('valor1');
            $valor2=$request->get('valor2');
            $valor3=$request->get('valor3');
            $valor4=$request->get('valor4');
            $valor5=$request->get('valor5');
            $valor6=$request->get('valor6');
            $valor7=$request->get('valor7');
            $valor8=$request->get('valor8');
            $valor9=$request->get('valor9');
            $total=$request->get('total');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($fte)) {
                $registro=new Form_010_1();
                $registro->fte=$fte[$cont];
                $registro->descripcion=$descripcion[$cont];
                $registro->valor1=$valor1[$cont];
                $registro->valor2=$valor2[$cont];
                $registro->valor3=$valor3[$cont];
                $registro->valor4=$valor4[$cont];
                $registro->valor5=$valor5[$cont];
                $registro->valor6=$valor6[$cont];
                $registro->valor7=$valor7[$cont];
                $registro->valor8=$valor8[$cont];
                $registro->valor9=$valor9[$cont];
                $registro->total=$total[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('DAF/form_010_1');
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
         $registro=DB::table('form_010_1s')->where('idf10_1','=',$id)->delete();
    return Redirect::to('DAF/form_010_1');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F10_1Export, 'f10_1.xlsx');
    }
}
