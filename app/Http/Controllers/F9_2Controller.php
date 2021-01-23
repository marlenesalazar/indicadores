<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_009_2;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF9_2;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F9_2Export;
use Illuminate\Support\Collection;

class F9_2Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_009_2s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf9_2','asc')
            ->paginate(5);
          return view('Infraestructura.form_009_2.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('Infraestructura.form_009_2.create');

    }
    public function store (RegistroF9_2 $request){

    	$registro = new Form_009_2;
    	$registro->obras=$request->get('obras');
    	$registro->sup=$request->get('sup');
    	$registro->costo=$request->get('costo');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('Infraestructura/form_009_2');

    }
    public function show($id){

	    return view("Infraestructura.form_009_2.show",["form_009_2"=>Form_009_2::findOrFail($id)]);
    }
    public function edit($id){
       
	    return view("Infraestructura.form_009_2.edit",["registro"=>Form_009_2::findOrFail($id)]);
    }
    public function update(RegistroF9_2 $request, $id){
    	$registro=Form_009_2::findOrFail($id);
    	$registro->obras=$request->get('obras');
    	$registro->sup=$request->get('sup');
    	$registro->costo=$request->get('costo');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('Infraestructura/form_009_2');
    }
   public function destroy($id){
   	$registro=DB::table('form_009_2s')->where('idf9_2','=',$id)->delete();
   	return Redirect::to('Infraestructura/form_009_2');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F9_2Export, 'f9_2.xlsx');
    }
}
