<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_009_3;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF9_3;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F9_3Export;
use Illuminate\Support\Collection;

class F9_3Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_009_3s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf9_3','asc')
            ->paginate(5);
          return view('Infraestructura.form_009_3.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('Infraestructura.form_009_3.create');

    }
    public function store (RegistroF9_3 $request){

    	$registro = new Form_009_3;
    	$registro->obras=$request->get('obras');
    	$registro->sup=$request->get('sup');
    	$registro->costo=$request->get('costo');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('Infraestructura/form_009_3');

    }
    public function show($id){

	    return view("Infraestructura.form_009_3.show",["form_009_3"=>Form_009_3::findOrFail($id)]);
    }
    public function edit($id){
       
	    return view("Infraestructura.form_009_3.edit",["registro"=>Form_009_3::findOrFail($id)]);
    }
    public function update(RegistroF9_3 $request, $id){
    	$registro=Form_009_3::findOrFail($id);
    	$registro->obras=$request->get('obras');
    	$registro->sup=$request->get('sup');
    	$registro->costo=$request->get('costo');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('Infraestructura/form_009_3');
    }
   public function destroy($id){
   	$registro=DB::table('form_009_3s')->where('idf9_3','=',$id)->delete();
   	return Redirect::to('Infraestructura/form_009_3');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F9_3Export, 'f9_3.xlsx');
    }
}
