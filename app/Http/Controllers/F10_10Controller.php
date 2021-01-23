<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Form_010_10;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF10_10;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F10_10Export;
use Illuminate\Support\Collection;

class F10_10Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_010_10s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf10_10','desc')
            ->paginate(8);
          return view('DAF.form_010_10.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('DAF.form_010_10.create');

    }
    public function store (RegistroF10_10 $request){
    	$registro = new Form_010_10;
    	$registro->año=$request->get('año');
    	$registro->becas=$request->get('becas');
    	$registro->p_ejecutado=$request->get('p_ejecutado');
    	$registro->indicador=$request->get('indicador');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('DAF/form_010_10');

    }
    public function show($id){

	    
    }
    public function edit($id){
       
	    return view("DAF.form_010_10.edit",["registro"=>Form_010_10::findOrFail($id)]);
    }
    public function update(RegistroF10_10 $request, $id){
    	$registro=Form_010_10::findOrFail($id);
    	$registro->año=$request->get('año');
    	$registro->becas=$request->get('becas');
    	$registro->p_ejecutado=$request->get('p_ejecutado');
    	$registro->indicador=$request->get('indicador');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('DAF/form_010_10');
    }
   public function destroy($id){
   	$registro=DB::table('form_010_10s')->where('idf10_10','=',$id)->delete();
   	return Redirect::to('DAF/form_010_10');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F10_10Export, 'f10_10.xlsx');
   }
}
