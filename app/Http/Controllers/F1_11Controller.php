<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF1_11;
use App\Form_001_11;
use App\Profecione;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F1_11Export;

use Illuminate\Support\Collection;

class F1_11Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_001_11s as fo')
            ->join('profeciones as p','fo.id_p','=','p.id_p')
            ->select('fo.idf1_11','p.nombre_p','fo.m_p','fo.f_p','fo.st_p','fo.m_e','fo.f_e','fo.st_e','fo.m_j','fo.f_j','fo.st_j','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf1_11','asc')
            ->paginate(53);
          return view('JefaturaDePersonal.form_001_11.index',["registro"=>$registro,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profecion = DB::table('profeciones as p')
        ->select('p.nombre_p','p.id_p')
        ->get();
        return view('JefaturaDePersonal.form_001_11.create',["profecion"=>$profecion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF1_11 $request)
    {
           $registros = new Form_001_11;

            $id_p=$request->get('id_p');
            $m_p=$request->get('m_p');
            $f_p=$request->get('f_p');
            $st_p=$request->get('st_p');
            $m_e=$request->get('m_e');
            $f_e=$request->get('f_e');
            $st_e=$request->get('st_e');
            $m_j=$request->get('m_j');
            $f_j=$request->get('f_j');
            $st_j=$request->get('st_j');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_p)) {
                $registro=new Form_001_11();
                $registro->id_p=$id_p[$cont];
                $registro->m_p=$m_p[$cont];
                $registro->f_p=$f_p[$cont];
                $registro->st_p=$st_p[$cont];
                $registro->m_e=$m_e[$cont];
                $registro->f_e=$f_e[$cont];
                $registro->st_e=$st_e[$cont];
                $registro->m_j=$m_j[$cont];
                $registro->f_j=$f_j[$cont];
                $registro->st_j=$st_j[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('JefaturaDePersonal/form_001_11');
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
    public function update(RegistroF1_11 $request, $id)
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
         $registro=DB::table('form_001_11s')->where('idf1_11','=',$id)->delete();
    return Redirect::to('JefaturaDePersonal/form_001_11');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F1_11Export, 'f1_11.xlsx');
    }
}
