<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_005_2;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF5_2;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F5_2Export;
use Illuminate\Support\Collection;

class F5_2Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_005_2s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf5_2','asc')
            ->paginate(8);
          return view('Bibliotecas.form_005_2.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('Bibliotecas.form_005_2.create');

    }
    public function store(RegistroF5_2 $request)
    {
           $registros = new Form_005_2;

            $biblioteca=$request->get('biblioteca');
            $l_nacionales=$request->get('l_nacionales');
            $l_extranjero=$request->get('l_extranjero');
            $tesis=$request->get('tesis');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($biblioteca)) {
                $registro=new Form_005_2();
                $registro->biblioteca=$biblioteca[$cont];
                $registro->l_nacionales=$l_nacionales[$cont];
                $registro->l_extranjero=$l_extranjero[$cont];
                $registro->tesis=$tesis[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('Bibliotecas/form_005_2');
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
         $registro=DB::table('form_005_2s')->where('idf5_2','=',$id)->delete();
    return Redirect::to('Bibliotecas/form_005_2');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F5_2Export, 'f5_2.xlsx');
    }
}
