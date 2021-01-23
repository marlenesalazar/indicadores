<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_8 extends Model
{
    protected $table='form_001_8s';
    protected $primaryKey='idf1_8';
    public $timestamps=false;
    protected $fillable=[
        'actividad',
        'hombres',
        'mujeres',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
