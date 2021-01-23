<?php

namespace App;

use App\Model\Form_003_1;
use App\Model\Facultade;
use Illuminate\Database\Eloquent\Model;

class Detalle3_1 extends Model
{
    protected $table='detalle3_1s';
    protected $primaryKey='idd3_1';
    public $timestamps=false;
    protected $fillable=[
    	'idf3_1',
    	'id_f',
    	'hombres',
    	'mujeres',
    	'total',
    	'porcentaje'
    ];

    protected $guarded=[
        'idd3_1'
    ];

    public function Form0031(){
        return $this->belongsTo('App\Form_003_1');
    }
}
