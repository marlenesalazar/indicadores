<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_11 extends Model
{
    protected $table='form_001_11s';
    protected $primaryKey='idf1_11';
    public $timestamps=false;
    protected $fillable=[
        'id_p',
        'm_p',
        'f_p',
        'st_p',
        'm_e',
        'f_e',
        'st_e',
        'm_j',
        'f_j',
        'st_j',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
