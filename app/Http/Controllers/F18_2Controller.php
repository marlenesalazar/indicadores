<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Form_018_2;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF18_2;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F18_2Export;
use Illuminate\Support\Collection;

class F18_2Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_018_2s as fo')->where('fo.año','LIKE','%'.$query.'%')
            ->orderBy('fo.idf18_2','asc')
            ->paginate(8);
          return view('ImprentaUniversitaria.form_018_2.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('ImprentaUniversitaria.form_018_2.create');

    }
    public function store (RegistroF18_2 $request){
    	$registro = new Form_018_2;
    	$registro->año=$request->get('año');
    	$registro->l_publicados=$request->get('l_publicados');
    	$registro->incremento=$request->get('incremento');
    	$registro->save();
    	return Redirect:: to('ImprentaUniversitaria/form_018_2');

    }
    public function show($id){

	    
    }
    public function edit($id){
       
	    return view("ImprentaUniversitaria.form_018_2.edit",["registro"=>Form_018_2::findOrFail($id)]);
    }
    public function update(RegistroF18_2 $request, $id){
    	$registro=Form_018_2::findOrFail($id);
    	$registro->año=$request->get('año');
    	$registro->l_publicados=$request->get('l_publicados');
    	$registro->incremento=$request->get('incremento');
    	$registro->update();
	    return Redirect::to('ImprentaUniversitaria/form_018_2');
    }
   public function destroy($id){
   	$registro=DB::table('form_018_2s')->where('idf18_2','=',$id)->delete();
   	return Redirect::to('ImprentaUniversitaria/form_018_2');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F18_2Export, 'f18_2.xlsx');
   }
}
