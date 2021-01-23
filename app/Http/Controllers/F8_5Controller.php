<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF8_5;
use App\Form_008_5;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F8_5Export;
use Illuminate\Support\Collection;

class F8_5Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_008_5s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf8_5','fa.nombre_f','c.nombre_c','fo.proyecto','fo.e_tematico','fo.u_proponente','fo.investigador','fo.e_financiera','fo.t_ejecucion','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf8_5','asc')
            ->paginate(40);
          return view('DireccionDeInvestigacion.form_008_5.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('DireccionDeInvestigacion.form_008_5.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF8_5 $request)
    {
           $registros = new Form_008_5;

            $id_c=$request->get('id_c');
            $proyecto=$request->get('proyecto');
            $e_tematico=$request->get('e_tematico');
            $u_proponente=$request->get('u_proponente');
            $investigador=$request->get('investigador');
            $e_financiera=$request->get('e_financiera');
            $t_ejecucion=$request->get('t_ejecucion');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_008_5();
                $registro->id_c=$id_c[$cont];
                $registro->proyecto=$proyecto[$cont];
                $registro->e_tematico=$e_tematico[$cont];
                $registro->u_proponente=$u_proponente[$cont];
                $registro->investigador=$investigador[$cont];
                $registro->e_financiera=$e_financiera[$cont];
                $registro->t_ejecucion=$t_ejecucion[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('DireccionDeInvestigacion/form_008_5');
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
         $registro=DB::table('form_008_5s')->where('idf8_5','=',$id)->delete();
    return Redirect::to('DireccionDeInvestigacion/form_008_5');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F8_5Export, 'f8_5.xlsx');
    }
}
