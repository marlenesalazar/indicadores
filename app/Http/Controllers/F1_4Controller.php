<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF1_4;
use App\Form_001_4;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F1_4Export;

use Illuminate\Support\Collection;
class F1_4Controller extends Controller
{
     public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_001_4s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf1_4','fa.nombre_f','c.nombre_c','fo.tc_c','fo.th_c','fo.st_c','fo.tc_a','fo.th_a','fo.st_a','fo.tc_as','fo.th_as','fo.st_as','fo.tc_asi','fo.th_asi','fo.st_asi','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf1_4','asc')
            ->paginate(40);
          return view('JefaturaDePersonal.form_001_4.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('JefaturaDePersonal.form_001_4.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF1_4 $request)
    {
           $registros = new Form_001_4;

            $id_c=$request->get('id_c');
            $tc_c=$request->get('tc_c');
            $th_c=$request->get('th_c');
            $st_c=$request->get('st_c');
            $tc_a=$request->get('tc_a');
            $th_a=$request->get('th_a');
            $st_a=$request->get('st_a');
            $tc_as=$request->get('tc_as');
            $th_as=$request->get('th_as');
            $st_as=$request->get('st_as');
            $tc_asi=$request->get('tc_asi');
            $th_asi=$request->get('th_asi');
            $st_asi=$request->get('st_asi');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_001_4();
                $registro->id_c=$id_c[$cont];
                $registro->tc_c=$tc_c[$cont];
                $registro->th_c=$th_c[$cont];
                $registro->st_c=$st_c[$cont];
                $registro->tc_a=$tc_a[$cont];
                $registro->th_a=$th_a[$cont];
                $registro->st_a=$st_a[$cont];
                $registro->tc_as=$tc_as[$cont];
                $registro->th_as=$th_as[$cont];
                $registro->st_as=$st_as[$cont];
                $registro->tc_asi=$tc_asi[$cont];
                $registro->th_asi=$th_asi[$cont];
                $registro->st_asi=$st_asi[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('JefaturaDePersonal/form_001_4');
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
    public function update(RegistroF1_4 $request, $id)
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
         $registro=DB::table('form_001_4s')->where('idf1_4','=',$id)->delete();
    return Redirect::to('JefaturaDePersonal/form_001_4');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F1_4Export, 'f1_4.xlsx');
    }
}
