<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_5 extends Model
{
    protected $table='form_001_5s';
    protected $primaryKey='idf1_5';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'm_d',
        'f_d',
        'st_d',
        'm_m',
        'f_m',
        'st_m',
        'm_e',
        'f_e',
        'st_e',
        'm_di',
        'f_di',
        'st_di',
        'm_l',
        'f_l',
        'st_l',
        'm_t',
        'f_t',
        'st_t',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
