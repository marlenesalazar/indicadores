<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_006_4;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF6_4;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F6_4Export;
use Illuminate\Support\Collection;

class F6_4Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_006_4s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf6_4','asc')
            ->paginate(6);
          return view('Postgrado.form_006_4.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('Postgrado.form_006_4.create');

    }
    public function store(RegistroF6_4 $request)
    {
           $registros = new Form_006_4;
           $nivel=$request->get('nivel');
           $num=$request->get('num');
           $curso=$request->get('curso');
           $unidad=$request->get('unidad');
           $inicio=$request->get('inicio');
           $fin=$request->get('fin');
           $gestion=$request->get('gestion');
            
            $cont =0;

            while ($cont < count($nivel)){
                $registro=new Form_006_4();
                $registro->nivel=$nivel[$cont];
                $registro->num=$num[$cont];
                $registro->curso=$curso[$cont];
                $registro->unidad=$unidad[$cont];
                $registro->inicio=$inicio[$cont];
                $registro->fin=$fin[$cont];
                $registro->gestion=$gestion[$cont];
                
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('Postgrado/form_006_4');
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
         $registro=DB::table('form_006_4s')->where('idf6_4','=',$id)->delete();
    return Redirect::to('Postgrado/form_006_4');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F6_4Export, 'f6_4.xlsx');
    }
}
