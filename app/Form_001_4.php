<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_4 extends Model
{
     protected $table='form_001_4s';
    protected $primaryKey='idf1_4';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'tc_c',
        'th_c',
        'st_c',
        'tc_a',
        'th_a',
        'st_a',
        'tc_as',
        'th_as',
        'st_as',
        'tc_asi',
        'th_asi',
        'st_asi',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
