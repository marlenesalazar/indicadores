<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Form_017_3;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF17_3;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F17_3Export;
use Illuminate\Support\Collection;

class F17_3Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_017_3s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf17_3','asc')
            ->paginate(8);
          return view('DireccionRelaciones.form_017_3.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('DireccionRelaciones.form_017_3.create');

    }
    public function store (RegistroF17_3 $request){
    	$registro = new Form_017_3;
    	$registro->año=$request->get('año');
    	$registro->n_convenios=$request->get('n_convenios');
    	$registro->indice=$request->get('indice');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('DireccionRelaciones/form_017_3');

    }
    public function show($id){

	    
    }
    public function edit($id){
       
	    return view("DireccionRelaciones.form_017_3.edit",["registro"=>Form_017_3::findOrFail($id)]);
    }
    public function update(RegistroF17_3 $request, $id){
    	$registro=Form_017_3::findOrFail($id);
    	$registro->año=$request->get('año');
    	$registro->n_convenios=$request->get('n_convenios');
    	$registro->indice=$request->get('indice');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('DireccionRelaciones/form_017_3');
    }
   public function destroy($id){
   	$registro=DB::table('form_017_3s')->where('idf17_3','=',$id)->delete();
   	return Redirect::to('DireccionRelaciones/form_017_3');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F17_3Export, 'f17_3.xlsx');
   }
}
