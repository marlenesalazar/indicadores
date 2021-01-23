<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF4_17;
use App\Form_004_17;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F4_17Export;
use Illuminate\Support\Collection;

class F4_17Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_004_17s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf4_17','fa.nombre_f','c.nombre_c','fo.hombres','fo.mujeres','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf4_17','asc')
            ->paginate(40);
          return view('BienestarUniversitario.form_004_17.index',["registro"=>$registro,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $carrera = DB::table('carreras as c')
        ->select('c.nombre_c','c.id_c')
        ->get();
        return view('BienestarUniversitario.form_004_17.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF4_17 $request)
    {
           $registros = new Form_004_17;

            $id_c=$request->get('id_c');
            $hombres=$request->get('hombres');
            $mujeres=$request->get('mujeres');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_004_17();
                $registro->id_c=$id_c[$cont];
                $registro->hombres=$hombres[$cont];
                $registro->mujeres=$mujeres[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('BienestarUniversitario/form_004_17');
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
         $registro=DB::table('form_004_17s')->where('idf4_17','=',$id)->delete();
    return Redirect::to('BienestarUniversitario/form_004_17');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F4_17Export, 'f4_17.xlsx');
    }
}
