<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF4_7;
use App\Form_004_7;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F2_7Export;
use Illuminate\Support\Collection;
class F4_7Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_004_7s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf4_7','fa.nombre_f','c.nombre_c','fo.completa','fo.parcial','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf4_7','asc')
            ->paginate(40);
          return view('BienestarUniversitario.form_004_7.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('BienestarUniversitario.form_004_7.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF4_7 $request)
    {
           $registros = new Form_004_7;

            $id_c=$request->get('id_c');
            $completa=$request->get('completa');
            $parcial=$request->get('parcial');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_004_7();
                $registro->id_c=$id_c[$cont];
                $registro->completa=$completa[$cont];
                $registro->parcial=$parcial[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('BienestarUniversitario/form_004_7');
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
         $registro=DB::table('form_004_7s')->where('idf4_7','=',$id)->delete();
    return Redirect::to('BienestarUniversitario/form_004_7');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F4_7Export, 'f4_7.xlsx');
    }
}
