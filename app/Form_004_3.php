<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_004_3 extends Model
{
    protected $table='form_004_3s';
    protected $primarykey='idf4_3';
    public $timestamps=false;
    protected $fillable=[
    	'id_f',
    	'm_c',
    	'f_c',
    	't_c',
    	'm_p',
    	'f_p',
    	't_p',
    	'total',
    	'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
        
    ];
}
