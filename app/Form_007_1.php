<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_007_1 extends Model
{
    protected $table='form_007_1s';
    protected $primaryKey='idf7_1';
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
