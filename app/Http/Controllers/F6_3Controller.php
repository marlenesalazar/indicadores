<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_006_3;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF6_3;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F6_3Export;
use Illuminate\Support\Collection;

class F6_3Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_006_3s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf6_3','asc')
            ->paginate(10);
          return view('Postgrado.form_006_3.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('Postgrado.form_006_3.create');

    }
    public function store(RegistroF6_3 $request)
    {
           $registros = new Form_006_3;
            $unidad=$request->get('unidad');
            $m_d=$request->get('m_d');
            $f_d=$request->get('f_d');
            $t_d=$request->get('t_d');
            $m_m=$request->get('m_m');
            $f_m=$request->get('f_m');
            $t_m=$request->get('t_m');
            $m_dip=$request->get('m_dip');
            $f_dip=$request->get('f_dip');
            $t_dip=$request->get('t_dip');
            $total=$request->get('total');
            $gestion=$request->get('gestion');
            

            $cont =0;

            while ($cont < count($unidad)){
                $registro=new Form_006_3();
                $registro->unidad=$unidad[$cont];
                $registro->m_d=$m_d[$cont];
                $registro->f_d=$f_d[$cont];
                $registro->t_d=$t_d[$cont];
                $registro->m_m=$m_m[$cont];
                $registro->f_m=$f_m[$cont];
                $registro->t_m=$t_m[$cont];
                $registro->m_dip=$m_dip[$cont];
                $registro->f_dip=$f_dip[$cont];
                $registro->t_dip=$t_dip[$cont];
                $registro->total=$total[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('Postgrado/form_006_3');
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
         $registro=DB::table('form_006_3s')->where('idf6_3','=',$id)->delete();
    return Redirect::to('Postgrado/form_006_3');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F6_3Export, 'f6_3.xlsx');
    }
}
