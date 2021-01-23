<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_007_5 extends Model
{
    protected $table='form_007_5s';
    protected $primaryKey='idf7_5';
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
