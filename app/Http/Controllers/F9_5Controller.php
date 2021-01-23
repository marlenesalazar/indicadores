<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF9_5;
use App\Form_009_5;
use App\Facultade;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F9_5Export;
use Illuminate\Support\Collection;

class F9_5Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_009_5s as fo')
            ->join('facultades as fa','fo.id_f','=','fa.id_f')
            ->select('fo.idf9_5','fa.nombre_f','fo.aulas','fo.estudiantes','fo.indicador','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf9_5','asc')
            ->paginate(12);
          return view('Infraestructura.form_009_5.index',["registro"=>$registro,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facultad = DB::table('facultades as fa')
        ->select('fa.nombre_f','fa.id_f')
        ->get();
        return view('Infraestructura.form_009_5.create',["facultad"=>$facultad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF9_5 $request)
    {
           $registros = new Form_009_5;

            $id_f=$request->get('id_f');
            $aulas=$request->get('aulas');
            $estudiantes=$request->get('estudiantes');
            $indicador=$request->get('indicador');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_f)) {
                $registro=new Form_009_5();
                $registro->id_f=$id_f[$cont];
                $registro->aulas=$aulas[$cont];
                $registro->estudiantes=$estudiantes[$cont];
                $registro->indicador=$indicador[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('Infraestructura/form_009_5');
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
    public function update(RegistroF4_2 $request, $id)
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
         $registro=DB::table('form_009_5s')->where('idf9_5','=',$id)->delete();
    return Redirect::to('Infraestructura/form_009_5');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F9_5Export, 'f9_5.xlsx');
    }
}
