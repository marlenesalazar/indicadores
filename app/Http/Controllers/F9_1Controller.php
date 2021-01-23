<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_009_1;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF9_1;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F9_1Export;
use Illuminate\Support\Collection;

class F9_1Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_009_1s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf9_1','asc')
            ->paginate(5);
          return view('Infraestructura.form_009_1.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('Infraestructura.form_009_1.create');

    }
    public function store (RegistroF9_1 $request){
    	/*$form_018_1 = new Form_009_1;
    	$form_018_1->titulo=$request->get('titulo');*/

    	$registro = new Form_009_1;
    	$registro->obras=$request->get('obras');
    	$registro->sup=$request->get('sup');
    	$registro->costo=$request->get('costo');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('Infraestructura/form_009_1');

    }
    public function show($id){

	    return view("Infraestructura.form_009_1.show",["form_009_1"=>Form_009_1::findOrFail($id)]);
    }
    public function edit($id){
       
	    return view("Infraestructura.form_009_1.edit",["registro"=>Form_009_1::findOrFail($id)]);
    }
    public function update(RegistroF9_1 $request, $id){
    	$registro=Form_009_1::findOrFail($id);
    	$registro->obras=$request->get('obras');
    	$registro->sup=$request->get('sup');
    	$registro->costo=$request->get('costo');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('Infraestructura/form_009_1');
    }
   public function destroy($id){
   /*$form_018_1=Form_018_1::findOrFail($id);
   	$form_018_1->update();*/
   	$registro=DB::table('form_009_1s')->where('idf9_1','=',$id)->delete();
   	return Redirect::to('Infraestructura/form_009_1');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F9_1Export, 'f9_1.xlsx');
    }
}
