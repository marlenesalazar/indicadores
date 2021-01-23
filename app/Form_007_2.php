<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_007_2 extends Model
{
    protected $table='form_007_2s';
    protected $primaryKey='idf7_2';
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
