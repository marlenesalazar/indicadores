<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF12_6;
use App\Form_012_6;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F12_6Export;
use Illuminate\Support\Collection;

class F12_6Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_012_6s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf12_6','fa.nombre_f','c.nombre_c','fo.n_proyecto','fo.n_participantes','fo.e_tematico','fo.resultados','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf12_6','asc')
            ->paginate(40);
          return view('Extension.form_012_6.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('Extension.form_012_6.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF12_6 $request)
    {
           $registros = new Form_012_6;

            $id_c=$request->get('id_c');
            $n_proyecto=$request->get('n_proyecto');
            $n_participantes=$request->get('n_participantes');
            $e_tematico=$request->get('e_tematico');
            $resultados=$request->get('resultados');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_012_6();
                $registro->id_c=$id_c[$cont];
                $registro->n_proyecto=$n_proyecto[$cont];
                $registro->n_participantes=$n_participantes[$cont];
                $registro->e_tematico=$e_tematico[$cont];
                $registro->resultados=$resultados[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('Extension/form_012_6');
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
         $registro=DB::table('form_012_6s')->where('idf12_6','=',$id)->delete();
    return Redirect::to('Extension/form_012_6');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F12_6Export, 'f12_6.xlsx');
    }
}
