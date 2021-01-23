<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form_003_5;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroF3_5;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F3_5Export;
use Illuminate\Support\Collection;
class F3_5Controller extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
    	if($request){
    		$query=trim($request->get('searchText'));
            $registro=DB::table('form_003_5s as fo')->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf3_5','asc')
            ->paginate(48);
          return view('DataCenter.form_003_5.index',["registro"=>$registro,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view('DataCenter.form_003_5.create');

    }
    public function store(RegistroF3_5 $request)
    {
           $registros = new Form_003_5;

            $edad=$request->get('edad');
            $artes=$request->get('artes');
            $cc_aa=$request->get('cc_aa');
            $cc_ee=$request->get('cc_ee');
            $c_puras=$request->get('c_puras');
            $cc_ss=$request->get('cc_ss');
            $derecho=$request->get('derecho');
            $ing=$request->get('ing');
            $ing_geo=$request->get('ing_geo');
            $ing_min=$request->get('ing_min');
            $tecnologica=$request->get('tecnologica');
            $c_salud=$request->get('c_salud');
            $medicina=$request->get('medicina');
            $p_uncia=$request->get('p_uncia');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($edad)) {
                $registro=new Form_003_5();
                $registro->edad=$edad[$cont];
                $registro->artes=$artes[$cont];
                $registro->cc_aa=$cc_aa[$cont];
                $registro->cc_ee=$cc_ee[$cont];
                $registro->c_puras=$c_puras[$cont];
                $registro->cc_ss=$cc_ss[$cont];
                $registro->derecho=$derecho[$cont];
                $registro->ing=$ing[$cont];
                $registro->ing_geo=$ing_geo[$cont];
                $registro->ing_min=$ing_min[$cont];
                $registro->tecnologica=$tecnologica[$cont];
                $registro->c_salud=$c_salud[$cont];
                $registro->medicina=$medicina[$cont];
                $registro->p_uncia=$p_uncia[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('DataCenter/form_003_5');
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
    public function update(RegistroF1_6 $request, $id)
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
         $registro=DB::table('form_003_5s')->where('idf3_5','=',$id)->delete();
    return Redirect::to('DataCenter/form_003_5');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F3_5Export, 'f3_5.xlsx');
    }
}
