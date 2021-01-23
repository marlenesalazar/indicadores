<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF1_1;
use App\Form_001_1;
use App\Categoria;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F1_1Export;
class F1_1Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_001_1s as fo')
            ->join('categorias as ca','fo.id_ca','=','ca.id_ca')
            ->select('fo.idf1_1','ca.nombre_c','fo.exc_m','fo.tc_m','fo.th_m','fo.total_m','fo.exc_h','fo.tc_h','fo.th_h','fo.total_h','fo.exc_t','fo.tc_t','fo.th_t','fo.total_t','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf1_1','desc')
            ->paginate(11);
          return view('JefaturaDePersonal.form_001_1.index',["registro"=>$registro,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = DB::table('categorias as ca')
        //->join('form_002_1s as fo','fa.id_f','=','fo.id_f')
        ->select('ca.nombre_c','ca.id_ca')
        ->get();
        return view('JefaturaDePersonal.form_001_1.create',["categoria"=>$categoria]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF1_1 $request)
    {
           $registros = new Form_001_1;

            $id_ca=$request->get('id_ca');
            $exc_m=$request->get('exc_m');
            $tc_m=$request->get('tc_m');
            $th_m=$request->get('th_m');
            $total_m=$request->get('total_m');
            $exc_h=$request->get('exc_h');
            $tc_h=$request->get('tc_h');
            $th_h=$request->get('th_h');
            $total_h=$request->get('total_h');
            $exc_t=$request->get('exc_t');
            $tc_t=$request->get('tc_t');
            $th_t=$request->get('th_t');
            $total_t=$request->get('total_t');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_ca)) {
                $registro=new Form_001_1();
                //$registro->idf3_1=$registro->idf3_1;
                //$registro->id=$registros->id;
                $registro->id_ca=$id_ca[$cont];
                $registro->exc_m=$exc_m[$cont];
                $registro->tc_m=$tc_m[$cont];
                $registro->th_m=$th_m[$cont];
                $registro->total_m=$total_m[$cont];
                $registro->exc_h=$exc_h[$cont];
                $registro->tc_h=$tc_h[$cont];
                $registro->th_h=$th_h[$cont];
                $registro->total_h=$total_h[$cont];
                $registro->exc_t=$exc_t[$cont];
                $registro->tc_t=$tc_t[$cont];
                $registro->th_t=$th_t[$cont];
                $registro->total_t=$total_t[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('JefaturaDePersonal/form_001_1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $registro=DB::table('form_001_1s as fo')
        ->join('categorias as ca','fo.id_ca','=','ca.id_ca')
            ->select('fo.idf1_1','ca.nombre_c','fo.exc_m','fo.tc_m','fo.th_m','fo.total_m','fo.exc_h','fo.tc_h','fo.th_h','fo.total_h','fo.exc_t','fo.tc_t','fo.th_t','fo.total_t','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->first();
          return view('JefaturaDePersonal.form_001_1.index',["registro"=>$registro,"searchText"=>$query]);
       
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
        $registro=Form_001_1::findOrFail($id);
        $registro->Categoria;
        $categoria=Categoria::orderBy('id_f','ASC')->pluck('nombre_c');
        return view('BienestarUniversitario.form_001_1.edit')
        ->with('categoria',$categoria)
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
    public function update(RegistroF1_1 $request, $id)
    {
        $registro=Form_001_1::findOrFail($id);
        $registro->id_ca=$request->get('id_ca');
        $registro->exc_m=$request->get('exc_m');
        $registro->tc_m=$request->get('tc_m');
        $registro->th_m=$request->get('th_m');
        $registro->total_m=$request->get('total_m');
        $registro->exc_h=$request->get('exc_h');
        $registro->tc_h=$request->get('tc_h');
        $registro->th_h=$request->get('th_h');
        $registro->total_h=$request->get('total_h');
        $registro->exc_t=$request->get('exc_t');
        $registro->tc_t=$request->get('tc_t');
        $registro->th_t=$request->get('th_t');
        $registro->total_t=$request->get('total_t');
        $registro->gestion=$request->get('gestion');
        $registro->update();
        return Redirect::to('JefaturaDePersonal/form_001_1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $registro=DB::table('form_001_1s')->where('idf1_1','=',$id)->delete();
    return Redirect::to('JefaturaDePersonal/form_001_1');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F1_1Export, 'f1_1.xlsx');
    }
}
