<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Form_010_8;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF10_8;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F10_8Export;
use Illuminate\Support\Collection;

class F10_8Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_010_8s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf10_8','desc')
            ->paginate(8);
          return view('DAF.form_010_8.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('DAF.form_010_8.create');

    }
    public function store (RegistroF10_8 $request){
    	$registro = new Form_010_8;
    	$registro->año=$request->get('año');
    	$registro->c_personal=$request->get('c_personal');
    	$registro->p_ejecutado=$request->get('p_ejecutado');
    	$registro->indicador=$request->get('indicador');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('DAF/form_010_8');

    }
    public function show($id){

	    
    }
    public function edit($id){
       
	    return view("DAF.form_010_8.edit",["registro"=>Form_010_8::findOrFail($id)]);
    }
    public function update(RegistroF10_8 $request, $id){
    	$registro=Form_010_8::findOrFail($id);
    	$registro->año=$request->get('año');
    	$registro->c_personal=$request->get('c_personal');
    	$registro->p_ejecutado=$request->get('p_ejecutado');
    	$registro->indicador=$request->get('indicador');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('DAF/form_010_8');
    }
   public function destroy($id){
   	$registro=DB::table('form_010_8s')->where('idf10_8','=',$id)->delete();
   	return Redirect::to('DAF/form_010_8');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F10_8Export, 'f10_8.xlsx');
   }
}
