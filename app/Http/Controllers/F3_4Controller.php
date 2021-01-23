<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF3_4;
use App\Form_003_4;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F3_4Export;
use Illuminate\Support\Collection;

class F3_4Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_003_4s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf3_4','fa.nombre_f','c.nombre_c','fo.fis_c','fo.part_c','fo.fis_p','fo.part_p','fo.fis_i','fo.part_i','fo.fis_in','fo.part_in','fo.fis_e','fo.part_e','fo.total','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf3_4','asc')
            ->paginate(40);
          return view('DataCenter.form_003_4.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('DataCenter.form_003_4.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF3_4 $request)
    {
           $registros = new Form_003_4;

            $id_c=$request->get('id_c');
            $fis_c=$request->get('fis_c');
            $part_c=$request->get('part_c');
            $fis_p=$request->get('fis_p');
            $part_p=$request->get('part_p');
            $fis_i=$request->get('fis_i');
            $part_i=$request->get('part_i');
            $fis_in=$request->get('fis_in');
            $part_in=$request->get('part_in');
            $fis_e=$request->get('fis_e');
            $part_e=$request->get('part_e');
            $total=$request->get('total');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_003_4();
                $registro->id_c=$id_c[$cont];
                $registro->fis_c=$fis_c[$cont];
                $registro->part_c=$part_c[$cont];
                $registro->fis_p=$fis_p[$cont];
                $registro->part_p=$part_p[$cont];
                $registro->fis_i=$fis_i[$cont];
                $registro->part_i=$part_i[$cont];
                $registro->fis_in=$fis_in[$cont];
                $registro->part_in=$part_in[$cont];
                $registro->fis_e=$fis_e[$cont];
                $registro->part_e=$part_e[$cont];
                $registro->total=$total[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('DataCenter/form_003_4');
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
         $registro=DB::table('form_003_4s')->where('idf3_4','=',$id)->delete();
    return Redirect::to('DataCenter/form_003_4');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F3_4Export, 'f3_4.xlsx');
    }
}
