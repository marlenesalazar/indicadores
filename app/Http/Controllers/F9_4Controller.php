<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_009_4;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF9_4;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F9_4Export;
use Illuminate\Support\Collection;

class F9_4Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_009_4s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf9_4','asc')
            ->paginate(5);
          return view('Infraestructura.form_009_4.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('Infraestructura.form_009_4.create');

    }
    public function store (RegistroF9_4 $request){

    	$registro = new Form_009_4;
    	$registro->obras=$request->get('obras');
    	$registro->sup=$request->get('sup');
    	$registro->costo=$request->get('costo');
    	$registro->gestion=$request->get('gestion');
    	$registro->save();
    	return Redirect:: to('Infraestructura/form_009_4');

    }
    public function show($id){

	    return view("Infraestructura.form_009_4.show",["form_009_4"=>Form_009_4::findOrFail($id)]);
    }
    public function edit($id){
       
	    return view("Infraestructura.form_009_4.edit",["registro"=>Form_009_4::findOrFail($id)]);
    }
    public function update(RegistroF9_4 $request, $id){
    	$registro=Form_009_4::findOrFail($id);
    	$registro->obras=$request->get('obras');
    	$registro->sup=$request->get('sup');
    	$registro->costo=$request->get('costo');
    	$registro->gestion=$request->get('gestion');
    	$registro->update();
	    return Redirect::to('Infraestructura/form_009_4');
    }
   public function destroy($id){
   	$registro=DB::table('form_009_4s')->where('idf9_4','=',$id)->delete();
   	return Redirect::to('Infraestructura/form_009_4');
   }
   	public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F9_4Export, 'f9_4.xlsx');
    }
}
