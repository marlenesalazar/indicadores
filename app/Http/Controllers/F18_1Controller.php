<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_018_1;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF18_1;
use DB;

class F18_1Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_018_1s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.id','desc')
            ->paginate(6);
          return view('ImprentaUniversitaria.form_018_1.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('ImprentaUniversitaria.form_018_1.create');

    }
    public function store (RegistroF18_1 $request){
    	$form_018_1 = new Form_018_1;
    	$form_018_1->titulo=$request->get('titulo');
    	$form_018_1->autor=$request->get('autor');
    	$form_018_1->cantidad=$request->get('cantidad');
    	$form_018_1->año=$request->get('año');
    	$form_018_1->carrera=$request->get('carrera');
    	$form_018_1->gestion=$request->get('gestion');
    	$form_018_1->save();
    	return Redirect:: to('ImprentaUniversitaria/form_018_1');

    }
    public function show($id){

	    return view("ImprentaUniversitaria.form_018_1.show",["form_018_1"=>Form_018_1::findOrFail($id)]);
    }
    public function edit($id){
       
	    return view("ImprentaUniversitaria.form_018_1.edit",["form_018_1"=>Form_018_1::findOrFail($id)]);
    }
    public function update(RegistroF18_1 $request, $id){
    	$form_018_1=Form_018_1::findOrFail($id);
    	$form_018_1->titulo=$request->get('titulo');
    	$form_018_1->autor=$request->get('autor');
    	$form_018_1->cantidad=$request->get('cantidad');
    	$form_018_1->año=$request->get('año');
    	$form_018_1->carrera=$request->get('carrera');
    	$form_018_1->gestion=$request->get('gestion');
    	$form_018_1->update();
	    return Redirect::to('ImprentaUniversitaria/form_018_1');
    }
   public function destroy($id){
   /*$form_018_1=Form_018_1::findOrFail($id);
   	$form_018_1->update();*/
   	$form_018_1=DB::table('form_018_1s')->where('id','=',$id)->delete();
   	return Redirect::to('ImprentaUniversitaria/form_018_1');}
}
