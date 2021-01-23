<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF3_3;
use App\Form_003_3;
use App\Carrera;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F3_3Export;
use Illuminate\Support\Collection;

class F3_3Controller extends Controller
{
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_003_3s as fo')
            ->join('carreras as c','fo.id_c','=','c.id_c')
            ->join('facultades as fa','fa.id_f','=','c.id_f')
            ->select('fo.idf3_3','fa.nombre_f','c.nombre_c','fo.beni','fo.pando','fo.chuq','fo.cbba','fo.lapaz','fo.oruro','fo.stacruz','fo.potosi','fo.tarija','fo.exterior','fo.total','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf3_3','asc')
            ->paginate(40);
          return view('DataCenter.form_003_3.index',["registro"=>$registro,"searchText"=>$query]);
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
        return view('DataCenter.form_003_3.create',["carrera"=>$carrera]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroF3_3 $request)
    {
           $registros = new Form_003_3;

            $id_c=$request->get('id_c');
            $beni=$request->get('beni');
            $pando=$request->get('pando');
            $chuq=$request->get('chuq');
            $cbba=$request->get('cbba');
            $lapaz=$request->get('lapaz');
            $oruro=$request->get('oruro');
            $stacruz=$request->get('stacruz');
            $potosi=$request->get('potosi');
            $tarija=$request->get('tarija');
            $exterior=$request->get('exterior');
            $total=$request->get('total');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_c)) {
                $registro=new Form_003_3();
                $registro->id_c=$id_c[$cont];
                $registro->beni=$beni[$cont];
                $registro->pando=$pando[$cont];
                $registro->chuq=$chuq[$cont];
                $registro->cbba=$cbba[$cont];
                $registro->lapaz=$lapaz[$cont];
                $registro->oruro=$oruro[$cont];
                $registro->stacruz=$stacruz[$cont];
                $registro->potosi=$potosi[$cont];
                $registro->tarija=$tarija[$cont];
                $registro->exterior=$exterior[$cont];
                $registro->total=$total[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('DataCenter/form_003_3');
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
         $registro=DB::table('form_003_3s')->where('idf3_3','=',$id)->delete();
    return Redirect::to('DataCenter/form_003_3');
    }

    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F3_3Export, 'f3_3.xlsx');
    }
}
