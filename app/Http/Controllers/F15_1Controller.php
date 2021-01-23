<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Form_015_1;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF15_1;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F15_1Export;
use Illuminate\Support\Collection;

class F15_1Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_015_1s as fo')->where('fo.año','LIKE','%'.$query.'%')
            ->orderBy('fo.idf15_1','asc')
            ->paginate(8);
          return view('EvaluacionAcreditacion.form_015_1.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('EvaluacionAcreditacion.form_015_1.create');

    }
    public function store (RegistroF15_1 $request){
    	$registro = new Form_015_1;
    	$registro->año=$request->get('año');
    	$registro->c_acreditadas=$request->get('c_acreditadas');
    	$registro->carreras=$request->get('carreras');
    	$registro->indicador=$request->get('indicador');
    	$registro->save();
    	return Redirect:: to('EvaluacionAcreditacion/form_015_1');

    }
    public function show($id){

	    
    }
    public function edit($id){
       
	    return view("EvaluacionAcreditacion.form_015_1.edit",["registro"=>Form_015_1::findOrFail($id)]);
    }
    public function update(RegistroF15_1 $request, $id){
    	$registro=Form_015_1::findOrFail($id);
    	$registro->año=$request->get('año');
    	$registro->c_acreditadas=$request->get('c_acreditadas');
    	$registro->carreras=$request->get('carreras');
    	$registro->indicador=$request->get('indicador');
    	$registro->update();
	    return Redirect::to('EvaluacionAcreditacion/form_015_1');
    }
   public function destroy($id){
   	$registro=DB::table('form_015_1s')->where('idf15_1','=',$id)->delete();
   	return Redirect::to('EvaluacionAcreditacion/form_015_1');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F15_1Export, 'f15_1.xlsx');
   }
}
