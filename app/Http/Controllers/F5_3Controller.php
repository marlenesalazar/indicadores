<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_005_3;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF5_3;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F5_3Export;
use Illuminate\Support\Collection;

class F5_3Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_005_3s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf5_3','asc')
            ->paginate(4);
          return view('Bibliotecas.form_005_3.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('Bibliotecas.form_005_3.create');

    }
    public function store(RegistroF5_3 $request)
    {
           $registros = new Form_005_3;

            $usuario2=$request->get('usuario2');
            $obras_m=$request->get('obras_m');
            $lectores_m=$request->get('lectores_m');
            $obras_f=$request->get('obras_f');
            $lectores_f=$request->get('lectores_f');
            $obras_f=$request->get('obras_f');
            $total=$request->get('total');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($usuario2)){
                $registro=new Form_005_3();
                $registro->usuario2=$usuario2[$cont];
                $registro->obras_m=$obras_m[$cont];
                $registro->lectores_m=$lectores_m[$cont];
                $registro->obras_f=$obras_f[$cont];
                $registro->lectores_f=$lectores_f[$cont];
                $registro->total=$total[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('Bibliotecas/form_005_3');
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
    public function update(RegistroF1_8 $request, $id)
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
         $registro=DB::table('form_005_3s')->where('idf5_3','=',$id)->delete();
    return Redirect::to('Bibliotecas/form_005_3');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F5_3Export, 'f5_3.xlsx');
    }
}
