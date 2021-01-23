<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_004_14 extends Model
{
    protected $table='form_004_14s';
    protected $primaryKey='idf4_14';
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
