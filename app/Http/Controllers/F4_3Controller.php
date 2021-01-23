
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RegistroF4_3;
use App\Form_004_3;
use App\Facultade;
use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\F4_3Export;


class F4_3Controller extends Controller
{
    public function _construct(){

    }
    public function index(Request $request){
        if($request){
            $query=trim($request->get('searchText'));
            $registro=DB::table('form_004_3s as fo')
            ->join('facultades as fa','fo.id_f','=','fa.id_f')
            ->select('fo.idf4_3','fa.nombre_f','fo.m_c','fo.f_c','fo.t_c','fo.m_p','fo.f_p','fo.t_p','fo.total','fo.porcentaje','fo.gestion')
            ->where('fo.gestion','LIKE','%'.$query.'%')
            ->orderBy('fo.idf4_3','asc')
            ->paginate(12);
          return view('BienestarUniversitario.form_004_3.index',["registro"=>$registro,"searchText"=>$query]);
        }
        
    }
    public function create(){
        $facultad = DB::table('facultades as fa')
        ->select('fa.nombre_f','fa.id_f')
        ->get();
        return view('BienestarUniversitario.form_004_3.create',["facultad"=>$facultad]);
    }
    public function store (RegistroF4_3 $request){
       
            $registros = new Form_004_3;
            $id_f=$request->get('id_f');
            $m_c=$request->get('m_c');
            $f_c=$request->get('f_c');
            $t_c=$request->get('t_c');
            $m_p=$request->get('m_p');
            $f_p=$request->get('f_p');
            $t_p=$request->get('t_p');
            $total=$request->get('total');
            $porcentaje=$request->get('porcentaje');
            $gestion=$request->get('gestion');

            $cont =0;

            while ($cont < count($id_f)) {
                $registro=new Form_004_3();
                $registro->id_f=$id_f[$cont];
                $registro->m_c=$m_c[$cont];
                $registro->f_c=$f_c[$cont];
                $registro->t_c=$t_c[$cont];
                $registro->m_p=$m_p[$cont];
                $registro->f_p=$f_p[$cont];
                $registro->t_p=$t_p[$cont];
                $registro->total=$total[$cont];
                $registro->porcentaje=$porcentaje[$cont];
                $registro->gestion=$gestion[$cont];
                $registro->save();
                $cont=$cont+1;
            }
        
        return Redirect:: to('BienestarUniversitario/form_004_3');

    }
    public function show($id){
    }
    public function edit($id){
    }
    public function update(RegistroF4_3 $request, $id){
    }
    public function destroy($id){
    $registro=DB::table('form_004_3s')->where('idf4_3','=',$id)->delete();
    return Redirect::to('BienestarUniversitario/form_004_3');
   }
    public function exportar(Request $request){
        
        //$query=trim($request->get('searchText'));
        
       // $excel=Excel::download(new F4_2Export(), 'f4_2.xlsx'["searchText"=>$query]);
        //return $excel;
        return Excel::download(new F4_3Export, 'f4_3.xlsx');
    }
}