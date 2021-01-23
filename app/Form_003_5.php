<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_003_5 extends Model
{
    protected $table='form_003_5s';
    protected $primaryKey='idf3_5';
    public $timestamps=false;
    protected $fillable=[
        'edad',
        'artes',
        'cc_aa',
        'cc_ee',
        'c_puras',
        'cc_ss',
        'derecho',
        'ing',
        'ing_geo',
        'ing_min',
        'tecnologica',
        'c_salud',
        'medicina',
        'p_uncia',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
