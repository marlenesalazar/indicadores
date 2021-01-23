<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF4_2;
use App\Form_004_2;
use App\Facultade;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F4_2Export;
use Illuminate\Support\Collection;


class F4_2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_004_2s as fo')
            ->join('facultades as fa','fo.id_f','=','fa.id_f')
            ->select('fo.idf4_2','fa.nombre_f','fo.hombres','fo.mujeres','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf4_2','asc')
            ->groupBy('fo.idf4_2','fa.nombre_f','fo.hombres','fo.mujeres','fo.total','fo.porcentaje','fo.gestion')
            ->paginate(12);
          return view('BienestarUniversitario.form_004_2.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('BienestarUniversitario.form_004_2.create',["facultad"=>$facultad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF4_2 $request)
    {
           $registros = new Form_004_2;

            $id_f=$request->get('id_f');
            $hombres=$request->get('hombres');
            $mujeres=$request->get('mujeres');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_f)) {
                $registro=new Form_004_2();
                $registro->id_f=$id_f[$cont];
                $registro->hombres=$hombres[$cont];
                $registro->mujeres=$mujeres[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('BienestarUniversitario/form_004_2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $registro=DB::table('form_004_2s as fo')
        ->join('facultades as fa','fo.id_f','=','fa.id_f')
        ->select('fa.nombre_f','fo.hombres','fo.mujeres','fo.total','fo.porcentaje','fo.gestion')
        ->where('fo.idf4_2','=',$id)
        ->first();
        //->get();
        return view("BienestarUniversitario.form_004_2.show",["registro"=>$registro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //pluck
        $registro=Form_004_2::findOrFail($id);
        $registro->Facultade;
        $facultad=Facultade::orderBy('id_f','ASC')->pluck('nombre_f');
        return view('BienestarUniversitario.form_004_2.edit')
        ->with('facultad',$facultad)
        ->with('registro',$registro);
       /* $facultad = DB::table('facultades as fa')
        ->select('fa.nombre_f','fa.id_f')
        ->get();*/

        /*return view("BienestarUniversitario.form_004_2.edit",["facultad"=>$facultad,"registro"=>Form_004_2::findOrFail($id)]);*/
        /*return view("BienestarUniversitario.form_004_2.edit",["registro"=>Form_004_2::findOrFail($id)]);*/
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
        $registro=Form_004_2::findOrFail($id);
        $registro->id_f=$request->get('id_f');
        $registro->hombres=$request->get('hombres');
        $registro->mujeres=$request->get('mujeres');
        $registro->total=$request->get('total');
        $registro->porcentaje=$request->get('porcentaje');
        $registro->gestion=$request->get('gestion');
        $registro->update();
        return Redirect::to('BienestarUniversitario/form_004_2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $registro=DB::table('form_004_2s')->where('idf4_2','=',$id)->delete();
    return Redirect::to('BienestarUniversitario/form_004_2');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F4_2Export, 'f4_2.xlsx');
    }
}
