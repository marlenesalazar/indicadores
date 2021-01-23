<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_004_1;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF4_1;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F4_1Export;
use Illuminate\Support\Collection;

class F4_1Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_004_1s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf4_1','asc')
            ->paginate(2);
          return view('BienestarUniversitario.form_004_1.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('BienestarUniversitario.form_004_1.create');

    }
    public function store(RegistroF4_1 $request)
    {
           $registros = new Form_004_1;

            $beca=$request->get('beca');
            $completa=$request->get('completa');
            $parcial=$request->get('parcial');
            $total=$request->get('total');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($beca)) {
                $registro=new Form_004_1();
                $registro->beca=$beca[$cont];
                $registro->completa=$completa[$cont];
                $registro->parcial=$parcial[$cont];
                $registro->total=$total[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('BienestarUniversitario/form_004_1');
    }
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegistroF1_8 $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $registro=DB::table('form_004_1s')->where('idf4_1','=',$id)->delete();
    return Redirect::to('BienestarUniversitario/form_004_1');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F4_1Export, 'f4_1.xlsx');
    }
}
