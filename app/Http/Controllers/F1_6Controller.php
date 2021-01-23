<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF1_6;
use App\Form_001_6;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F1_6Export;

use Illuminate\Support\Collection;

class F1_6Controller extends Controller
{
     public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_001_6s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf1_6','fa.nombre_f','c.nombre_c','fo.m_aux','fo.f_aux','fo.st_aux','fo.m_inv','fo.f_inv','fo.st_inv','fo.m_to','fo.f_to','fo.total_to','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf1_6','asc')
            //->groupBy('fo.idf4_2','fa.nombre_f','fo.hombres','fo.mujeres','fo.total','fo.porcentaje','fo.gestion')
            ->paginate(40);
          return view('JefaturaDePersonal.form_001_6.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('JefaturaDePersonal.form_001_6.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF1_6 $request)
    {
           $registros = new Form_001_6;

            $id_c=$request->get('id_c');
            $m_aux=$request->get('m_aux');
            $f_aux=$request->get('f_aux');
            $st_aux=$request->get('st_aux');
            $m_inv=$request->get('m_inv');
            $f_inv=$request->get('f_inv');
            $st_inv=$request->get('st_inv');
            $m_to=$request->get('m_to');
            $f_to=$request->get('f_to');
            $total_to=$request->get('total_to');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_001_6();
                $registro->id_c=$id_c[$cont];
                $registro->m_aux=$m_aux[$cont];
                $registro->f_aux=$f_aux[$cont];
                $registro->st_aux=$st_aux[$cont];
                $registro->m_inv=$m_inv[$cont];
                $registro->f_inv=$f_inv[$cont];
                $registro->st_inv=$st_inv[$cont];
                $registro->m_to=$m_to[$cont];
                $registro->f_to=$f_to[$cont];
                $registro->total_to=$total_to[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('JefaturaDePersonal/form_001_6');
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
         $registro=DB::table('form_001_6s')->where('idf1_6','=',$id)->delete();
    return Redirect::to('JefaturaDePersonal/form_001_6');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F1_6Export, 'f1_6.xlsx');
    }
}
