<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Form_015_2;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF15_2;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F15_2Export;
use Illuminate\Support\Collection;

class F15_2Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_015_2s as fo')->where('fo.año','LIKE','%'.$query.'%')
            ->orderBy('fo.idf15_2','asc')
            ->paginate(8);
          return view('EvaluacionAcreditacion.form_015_2.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('EvaluacionAcreditacion.form_015_2.create');

    }
    public function store (RegistroF15_2 $request){
    	$registro = new Form_015_2;
    	$registro->año=$request->get('año');
    	$registro->c_autoevaluadas=$request->get('c_autoevaluadas');
    	$registro->carreras=$request->get('carreras');
    	$registro->indicador=$request->get('indicador');
    	$registro->save();
    	return Redirect:: to('EvaluacionAcreditacion/form_015_2');

    }
    public function show($id){

	    
    }
    public function edit($id){
       
	    return view("EvaluacionAcreditacion.form_015_2.edit",["registro"=>Form_015_2::findOrFail($id)]);
    }
    public function update(RegistroF15_2 $request, $id){
    	$registro=Form_015_2::findOrFail($id);
    	$registro->año=$request->get('año');
    	$registro->c_autoevaluadas=$request->get('c_autoevaluadas');
    	$registro->carreras=$request->get('carreras');
    	$registro->indicador=$request->get('indicador');
    	$registro->update();
	    return Redirect::to('EvaluacionAcreditacion/form_015_2');
    }
   public function destroy($id){
   	$registro=DB::table('form_015_2s')->where('idf15_2','=',$id)->delete();
   	return Redirect::to('EvaluacionAcreditacion/form_015_2');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F15_2Export, 'f15_2.xlsx');
   }
}
