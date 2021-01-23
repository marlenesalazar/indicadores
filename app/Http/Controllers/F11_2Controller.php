<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF11_2;
use App\Form_011_2;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F11_2Export;
use Illuminate\Support\Collection;

class F11_2Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_011_2s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf11_2','fa.nombre_f','c.nombre_c','fo.masculino','fo.femenino','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf11_2','asc')
            ->paginate(40);
          return view('MuseoUniversitario.form_011_2.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('MuseoUniversitario.form_011_2.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF11_2 $request)
    {
           $registros = new Form_011_2;

            $id_c=$request->get('id_c');
            $masculino=$request->get('masculino');
            $femenino=$request->get('femenino');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_011_2();
                $registro->id_c=$id_c[$cont];
                $registro->masculino=$masculino[$cont];
                $registro->femenino=$femenino[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('MuseoUniversitario/form_011_2');
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
         $registro=DB::table('form_011_2s')->where('idf11_2','=',$id)->delete();
    return Redirect::to('MuseoUniversitario/form_011_2');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F11_2Export, 'f11_2.xlsx');
    }
}
