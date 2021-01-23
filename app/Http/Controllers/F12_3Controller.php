<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF12_3;
use App\Form_012_3;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F12_3Export;
use Illuminate\Support\Collection;

class F12_3Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_012_3s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf12_3','fa.nombre_f','c.nombre_c','fo.n_proyecto','fo.e_tematico','fo.e_principal','fo.e_financiera','fo.t_ejecucion','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf12_3','asc')
            ->paginate(40);
          return view('Extension.form_012_3.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('Extension.form_012_3.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF12_3 $request)
    {
           $registros = new Form_012_3;

            $id_c=$request->get('id_c');
            $n_proyecto=$request->get('n_proyecto');
            $e_tematico=$request->get('e_tematico');
            $e_principal=$request->get('e_principal');
            $e_financiera=$request->get('e_financiera');
            $t_ejecucion=$request->get('t_ejecucion');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_012_3();
                $registro->id_c=$id_c[$cont];
                $registro->n_proyecto=$n_proyecto[$cont];
                $registro->e_tematico=$e_tematico[$cont];
                $registro->e_principal=$e_principal[$cont];
                $registro->e_financiera=$e_financiera[$cont];
                $registro->t_ejecucion=$t_ejecucion[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('Extension/form_012_3');
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
         $registro=DB::table('form_012_3s')->where('idf12_3','=',$id)->delete();
    return Redirect::to('Extension/form_012_3');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F12_3Export, 'f12_3.xlsx');
    }
}
