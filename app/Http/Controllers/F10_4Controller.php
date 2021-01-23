<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_010_4;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF10_4;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F10_4Export;
use Illuminate\Support\Collection;

class F10_4Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_010_4s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf10_4','desc')
            ->paginate(8);
          return view('DAF.form_010_4.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('DAF.form_010_4.create');

    }
    public function store (RegistroF10_4 $request){
    	$registro = new Form_010_4;
    	$registro->año=$request->get('año');
    	$registro->p_aprobado=$request->get('p_aprobado');
    	$registro->p_ejecutado=$request->get('p_ejecutado');
    	$registro->indicador=$request->get('indicador');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('DAF/form_010_4');

    }
    public function show($id){

	    
    }
    public function edit($id){
       
	    return view("DAF.form_010_4.edit",["registro"=>Form_010_4::findOrFail($id)]);
    }
    public function update(RegistroF10_4 $request, $id){
    	$registro=Form_010_4::findOrFail($id);
    	$registro->año=$request->get('año');
    	$registro->p_aprobado=$request->get('p_aprobado');
    	$registro->p_ejecutado=$request->get('p_ejecutado');
    	$registro->indicador=$request->get('indicador');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('DAF/form_010_4');
    }
   public function destroy($id){
   	$registro=DB::table('form_010_4s')->where('idf10_4','=',$id)->delete();
   	return Redirect::to('DAF/form_010_4');}
}
