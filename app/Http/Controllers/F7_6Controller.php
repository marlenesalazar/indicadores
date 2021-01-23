<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF7_6;
use App\Form_007_6;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F7_6Export;
use Illuminate\Support\Collection;

class F7_6Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_007_6s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf7_6','fa.nombre_f','c.nombre_c','fo.artes','fo.agronomia','fo.cc_ee','fo.c_puras','fo.cc_ss','fo.derecho','fo.ingenieria','fo.geologica','fo.minera','fo.tecnologica','fo.salud','fo.medicina','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf7_6','asc')
            ->paginate(40);
          return view('Inscripciones.form_007_6.index',["registro"=>$registro,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrera = DB::table('carreras as c')
        ->select('c.nombre_c','c.id_c')
        ->get();
        return view('Inscripciones.form_007_6.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF7_6 $request)
    {
           $registros = new Form_007_6;

            $id_c=$request->get('id_c');
            $artes=$request->get('artes');
            $agronomia=$request->get('agronomia');
            $cc_ee=$request->get('cc_ee');
            $c_puras=$request->get('c_puras');
            $cc_ss=$request->get('cc_ss');
            $derecho=$request->get('derecho');
            $ingenieria=$request->get('ingenieria');
            $geologica=$request->get('geologica');
            $minera=$request->get('minera');
            $tecnologica=$request->get('tecnologica');
            $salud=$request->get('salud');
            $medicina=$request->get('medicina');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_007_6();
                $registro->id_c=$id_c[$cont];
                $registro->artes=$artes[$cont];
                $registro->agronomia=$agronomia[$cont];
                $registro->cc_ee=$cc_ee[$cont];
                $registro->c_puras=$c_puras[$cont];
                $registro->cc_ss=$cc_ss[$cont];
                $registro->derecho=$derecho[$cont];
                $registro->ingenieria=$ingenieria[$cont];
                $registro->geologica=$geologica[$cont];
                $registro->minera=$minera[$cont];
                $registro->tecnologica=$tecnologica[$cont];
                $registro->salud=$salud[$cont];
                $registro->medicina=$medicina[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('Inscripciones/form_007_6');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function update(RegistroF1_3 $request, $id)
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
         $registro=DB::table('form_007_6s')->where('idf7_6','=',$id)->delete();
    return Redirect::to('Inscripciones/form_007_6');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F7_6Export, 'f7_6.xlsx');
    }
}
