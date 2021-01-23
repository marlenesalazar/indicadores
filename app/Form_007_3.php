<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_007_3 extends Model
{
    protected $table='form_007_3s';
    protected $primaryKey='idf7_3';
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
