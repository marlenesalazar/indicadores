<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_7 extends Model
{
    protected $table='form_001_7s';
    protected $primaryKey='idf1_7';
    public $timestamps=false;
    protected $fillable=[
        'contrato',
        'hombres',
        'mujeres',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
