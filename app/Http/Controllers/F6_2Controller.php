<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_006_2;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF6_2;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F6_2Export;
use Illuminate\Support\Collection;

class F6_2Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_006_2s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf6_2','asc')
            ->paginate(3);
          return view('Postgrado.form_006_2.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('Postgrado.form_006_2.create');

    }
    public function store(RegistroF6_2 $request)
    {
           $registros = new Form_006_2;

            $curso=$request->get('curso');
            $unidad=$request->get('unidad');
            $gestion=$request->get('gestion');
            $nivel=$request->get('nivel');

            $cont =0;

            while ($cont < count($nivel)){
                $registro=new Form_006_2();
                $registro->curso=$curso[$cont];
                $registro->unidad=$unidad[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->nivel=$nivel[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('Postgrado/form_006_2');
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
         $registro=DB::table('form_006_2s')->where('idf6_2','=',$id)->delete();
    return Redirect::to('Postgrado/form_006_2');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F6_3Export, 'f6_2.xlsx');
    }
}
