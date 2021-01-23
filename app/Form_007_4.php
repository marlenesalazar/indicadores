<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_007_4 extends Model
{
    protected $table='form_007_4s';
    protected $primaryKey='idf7_4';
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
