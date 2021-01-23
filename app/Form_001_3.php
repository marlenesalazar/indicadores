<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_3 extends Model
{
    protected $table='form_001_3s';
    protected $primaryKey='idf1_3';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'hombres',
        'mujeres',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
