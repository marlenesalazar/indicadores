<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Form_010_6;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF10_6;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F10_6Export;
use Illuminate\Support\Collection;

class F10_6Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_010_6s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf10_6','desc')
            ->paginate(8);
          return view('DAF.form_010_6.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('DAF.form_010_6.create');

    }
    public function store (RegistroF10_6 $request){
    	$registro = new Form_010_6;
    	$registro->año=$request->get('año');
    	$registro->construcciones=$request->get('construcciones');
    	$registro->p_ejecutado=$request->get('p_ejecutado');
    	$registro->indicador=$request->get('indicador');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('DAF/form_010_6');

    }
    public function show($id){

	    
    }
    public function edit($id){
       
	    return view("DAF.form_010_6.edit",["registro"=>Form_010_6::findOrFail($id)]);
    }
    public function update(RegistroF10_6 $request, $id){
    	$registro=Form_010_6::findOrFail($id);
    	$registro->año=$request->get('año');
    	$registro->construcciones=$request->get('construcciones');
    	$registro->p_ejecutado=$request->get('p_ejecutado');
    	$registro->indicador=$request->get('indicador');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('DAF/form_010_6');
    }
   public function destroy($id){
   	$registro=DB::table('form_010_6s')->where('idf10_6','=',$id)->delete();
   	return Redirect::to('DAF/form_010_6');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F10_6Export, 'f10_6.xlsx');
   }
}
