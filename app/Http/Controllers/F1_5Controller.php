<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF1_5;
use App\Form_001_5;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F1_5Export;

use Illuminate\Support\Collection;
class F1_5Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_001_5s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf1_5','fa.nombre_f','c.nombre_c','fo.m_doc','fo.f_doc','fo.st_doc','fo.m_mas','fo.f_mas','fo.st_mas','fo.m_es','fo.f_es','fo.st_es','fo.m_dip','fo.f_dip','fo.st_dip','fo.m_lic','fo.f_lic','fo.st_lic','fo.m_tec','fo.f_tec','fo.st_tec','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf1_5','asc')
            ->paginate(40);
          return view('JefaturaDePersonal.form_001_5.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('JefaturaDePersonal.form_001_5.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF1_5 $request)
    {
           $registros = new Form_001_5;

            $id_c=$request->get('id_c');
            $m_doc=$request->get('m_doc');
            $f_doc=$request->get('f_doc');
            $st_doc=$request->get('st_doc');
            $m_mas=$request->get('m_mas');
            $f_mas=$request->get('f_mas');
            $st_mas=$request->get('st_mas');
            $m_es=$request->get('m_es');
            $f_es=$request->get('f_es');
            $st_es=$request->get('st_es');
            $m_dip=$request->get('m_dip');
            $f_dip=$request->get('f_dip');
            $st_dip=$request->get('st_dip');
            $m_lic=$request->get('m_lic');
            $f_lic=$request->get('f_lic');
            $st_lic=$request->get('st_lic');
            $m_tec=$request->get('m_tec');
            $f_tec=$request->get('f_tec');
            $st_tec=$request->get('st_tec');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_001_5();
                $registro->id_c=$id_c[$cont];
                $registro->m_doc=$m_doc[$cont];
                $registro->f_doc=$f_doc[$cont];
                $registro->st_doc=$st_doc[$cont];
                $registro->m_mas=$m_mas[$cont];
                $registro->f_mas=$f_mas[$cont];
                $registro->st_mas=$st_mas[$cont];
                $registro->m_es=$m_es[$cont];
                $registro->f_es=$f_es[$cont];
                $registro->st_es=$st_es[$cont];
                $registro->m_dip=$m_dip[$cont];
                $registro->f_dip=$f_dip[$cont];
                $registro->st_dip=$st_dip[$cont];
                $registro->m_lic=$m_lic[$cont];
                $registro->f_lic=$f_lic[$cont];
                $registro->st_lic=$st_lic[$cont];
                $registro->m_tec=$m_tec[$cont];
                $registro->f_tec=$f_tec[$cont];
                $registro->st_tec=$st_tec[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('JefaturaDePersonal/form_001_5');
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
    public function update(RegistroF1_5 $request, $id)
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
         $registro=DB::table('form_001_5s')->where('idf1_5','=',$id)->delete();
    return Redirect::to('JefaturaDePersonal/form_001_5');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F1_5Export, 'f1_4.xlsx');
    } 
}
