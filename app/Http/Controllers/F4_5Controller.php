<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF4_5;
use App\Form_004_5;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F4_5Export;
use Illuminate\Support\Collection;

class F4_5Controller extends Controller
{
    public function _construct(){

    }
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_004_5s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf4_5','fa.nombre_f','c.nombre_c','fo.m_c','fo.f_c','fo.t_c','fo.m_p','fo.f_p','fo.t_p','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf4_5','asc')
            ->paginate(12);
          return view('BienestarUniversitario.form_004_5.index',["registro"=>$registro,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $carrera = DB::table('carreras as c')
        ->select('c.nombre_c','c.id_c')
        ->get();
        return view('BienestarUniversitario.form_004_5.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF4_5 $request)
    {
           $registros = new Form_004_5;

            $id_c=$request->get('id_c');
            $m_c=$request->get('m_c');
            $f_c=$request->get('f_c');
            $t_c=$request->get('t_c');
            $m_p=$request->get('m_p');
            $f_p=$request->get('f_p');
            $t_p=$request->get('t_p');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_004_5();
                $registro->id_c=$id_c[$cont];
                $registro->m_c=$m_c[$cont];
                $registro->f_c=$f_c[$cont];
                $registro->t_c=$t_c[$cont];
                $registro->m_p=$m_p[$cont];
                $registro->f_p=$f_p[$cont];
                $registro->t_p=$t_p[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('BienestarUniversitario/form_004_5');
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
         $registro=DB::table('form_004_5s')->where('idf4_5','=',$id)->delete();
    return Redirect::to('BienestarUniversitario/form_004_5');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F4_5Export, 'f4_5.xlsx');
    }
}
