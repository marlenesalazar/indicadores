<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Form_017_5;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF17_5;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F17_5Export;
use Illuminate\Support\Collection;

class F17_5Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_017_5s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf17_5','asc')
            ->paginate(8);
          return view('DireccionRelaciones.form_017_5.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('DireccionRelaciones.form_017_5.create');

    }
    public function store (RegistroF17_5 $request){
    	$registro = new Form_017_5;
    	$registro->año=$request->get('año');
    	$registro->n_convenios=$request->get('n_convenios');
    	$registro->indice=$request->get('indice');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('DireccionRelaciones/form_017_5');

    }
    public function show($id){

	    
    }
    public function edit($id){
       
	    return view("DireccionRelaciones.form_017_5.edit",["registro"=>Form_017_5::findOrFail($id)]);
    }
    public function update(RegistroF17_5 $request, $id){
    	$registro=Form_017_5::findOrFail($id);
    	$registro->año=$request->get('año');
    	$registro->n_convenios=$request->get('n_convenios');
    	$registro->indice=$request->get('indice');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('DireccionRelaciones/form_017_5');
    }
   public function destroy($id){
   	$registro=DB::table('form_017_5s')->where('idf17_5','=',$id)->delete();
   	return Redirect::to('DireccionRelaciones/form_017_5');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F17_5Export, 'f17_5.xlsx');
   }
}
