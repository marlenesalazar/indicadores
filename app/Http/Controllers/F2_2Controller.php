<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF2_2;
use App\Form_002_2;
use App\Facultade;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F2_2Export;
use Illuminate\Support\Collection;

class F2_2Controller extends Controller
{
    public function _construct(){

    }
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_002_2s as fo')
            ->join('facultades as fa','fo.id_f','=','fa.id_f')
            ->select('fo.idf2_2','fa.nombre_f','fo.m_l','fo.f_l','fo.st_l','fo.m_t','fo.f_t','fo.st_t','fo.total','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf2_2','asc')
            ->paginate(12);
          return view('titulos.form_002_2.index',["registro"=>$registro,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $facultad = DB::table('facultades as fa')
        ->select('fa.nombre_f','fa.id_f')
        ->get();
        return view('titulos.form_002_2.create',["facultad"=>$facultad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF2_2 $request)
    {
           $registros = new Form_002_2;

            $id_f=$request->get('id_f');
            $m_l=$request->get('m_l');
            $f_l=$request->get('f_l');
            $st_l=$request->get('st_l');
            $m_t=$request->get('m_t');
            $f_t=$request->get('f_t');
            $st_t=$request->get('st_t');
            $total=$request->get('total');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_f)) {
                $registro=new Form_002_2();
                $registro->id_f=$id_f[$cont];
                $registro->m_l=$m_l[$cont];
                $registro->f_l=$f_l[$cont];
                $registro->st_l=$st_l[$cont];
                $registro->m_t=$m_t[$cont];
                $registro->f_t=$f_t[$cont];
                $registro->st_t=$st_t[$cont];
                $registro->total=$total[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('titulos/form_002_2');
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
         $registro=DB::table('form_002_2s')->where('idf2_2','=',$id)->delete();
    return Redirect::to('titulos/form_002_2');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F2_2Export, 'f2_2.xlsx');
    }
}
