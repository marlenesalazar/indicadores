<?php

namespace App\Exports;
//use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Form_004_2;
use App\Facultade;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
//use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
//use Maatwebsite\Excel\Concerns\Exportable;
use DB;
//use Illuminate\Contracts\View\View;
//use Maatwebsite\Excel\Concerns\FromQuery;
//use Maatwebsite\Excel\Concerns\FromView;
//,WithStrictNullComparison, WithTitle, WithEvents
class F4_2Export implements  FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function collection()
    {
      
            $f4_2 = DB::table('form_004_2s as fo')
            ->join('facultades as fa','fo.id_f','=','fa.id_f')
            ->select('fa.nombre_f','fo.hombres','fo.mujeres','fo.total','fo.porcentaje')->get();
            //->where('fo.gestion','=','$query')->get();
       return  $f4_2;
       }
    
    public function headings():array{
    	return [
    		'FACULTADES',
    		'HOMBRES',
    		'MUJERES',
    		'TOTAL',
    		'PORCENTAJE'
    	];
    }
   /* private $query;
    public function __construct(string $query){
        $this->query=$query;
    }
    public function view(): View
    {
       // return view('BienestarUniversitario.form_004_2.exports', [
            //'registro' => Form_004_2::form_004_2s()
        //]);
        return view('BienestarUniversitario.form_004_2.exports', [
            //'registro' => Form_004_2::form_004_2s()
         'registro' => Form_004_2::form_004_2s()
      ]);
    }*/
   /* public function title(): string
    {
        return 'BECA ALIMENTACION POR GENERO SEGUN FACULTADES';
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->getSheet()->autoSize();
                $event->getSheet()->getDelegate()->getStyle('A1:C11')
                    ->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            }
        ];
    }*/
   

}
