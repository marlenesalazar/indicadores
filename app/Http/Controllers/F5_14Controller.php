<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_005_14;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF5_14;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F5_14Export;
use Illuminate\Support\Collection;

class F5_14Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_005_14s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf5_14','asc')
            ->paginate(2);
          return view('Bibliotecas.form_005_14.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('Bibliotecas.form_005_14.create');

    }
    public function store(RegistroF5_14 $request)
    {
           $registros = new Form_005_14;

            $usuario=$request->get('usuario');
            $obras_m=$request->get('obras_m');
            $lectores_m=$request->get('lectores_m');
            $obras_f=$request->get('obras_f');
            $lectores_f=$request->get('lectores_f');
            $obras_f=$request->get('obras_f');
            $total=$request->get('total');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($usuario)){
                $registro=new Form_005_14();
                $registro->usuario=$usuario[$cont];
                $registro->obras_m=$obras_m[$cont];
                $registro->lectores_m=$lectores_m[$cont];
                $registro->obras_f=$obras_f[$cont];
                $registro->lectores_f=$lectores_f[$cont];
                $registro->total=$total[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('Bibliotecas/form_005_14');
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
         $registro=DB::table('form_005_14s')->where('idf5_14','=',$id)->delete();
    return Redirect::to('Bibliotecas/form_005_14');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F5_14Export, 'f5_14.xlsx');
    }
}
