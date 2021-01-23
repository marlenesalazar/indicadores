<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF4_6;
use App\Form_004_6;
use App\Facultade;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F4_6Export;

class F4_6Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_004_6s as fo')
            ->join('facultades as fa','fo.id_f','=','fa.id_f')
            ->select('fo.idf4_6','fa.nombre_f','fo.completa','fo.parcial','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf4_6','asc')
            ->paginate(12);
          return view('BienestarUniversitario.form_004_6.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('BienestarUniversitario.form_004_6.create',["facultad"=>$facultad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF4_6 $request)
    {
           $registros = new Form_004_6;

            $id_f=$request->get('id_f');
            $completa=$request->get('completa');
            $parcial=$request->get('parcial');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_f)) {
                $registro=new Form_004_6();
                $registro->id_f=$id_f[$cont];
                $registro->completa=$completa[$cont];
                $registro->parcial=$parcial[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('BienestarUniversitario/form_004_6');
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
         $registro=DB::table('form_004_6s')->where('idf4_6','=',$id)->delete();
    return Redirect::to('BienestarUniversitario/form_004_6');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F4_6Export, 'f4_6.xlsx');
    }
}
