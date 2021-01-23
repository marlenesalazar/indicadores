<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Form_010_5;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF10_5;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F10_5Export;
use Illuminate\Support\Collection;

class F10_5Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_010_5s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf10_5','desc')
            ->paginate(8);
          return view('DAF.form_010_5.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('DAF.form_010_5.create');

    }
    public function store (RegistroF10_5 $request){
    	$registro = new Form_010_5;
    	$registro->año=$request->get('año');
    	$registro->sueldos=$request->get('sueldos');
    	$registro->p_ejecutado=$request->get('p_ejecutado');
    	$registro->indicador=$request->get('indicador');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('DAF/form_010_5');

    }
    public function show($id){

	    
    }
    public function edit($id){
       
	    return view("DAF.form_010_5.edit",["registro"=>Form_010_5::findOrFail($id)]);
    }
    public function update(RegistroF10_5 $request, $id){
    	$registro=Form_010_5::findOrFail($id);
    	$registro->año=$request->get('año');
    	$registro->sueldos=$request->get('sueldos');
    	$registro->p_ejecutado=$request->get('p_ejecutado');
    	$registro->indicador=$request->get('indicador');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('DAF/form_010_5');
    }
   public function destroy($id){
   	$registro=DB::table('form_010_5s')->where('idf10_5','=',$id)->delete();
   	return Redirect::to('DAF/form_010_5');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F10_5Export, 'f10_5.xlsx');
   }
}
