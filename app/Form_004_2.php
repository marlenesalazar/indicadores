<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Form_004_2 extends Model
{
    protected $table='form_004_2s';
    protected $primaryKey='idf4_2';
    public $timestamps=false;
    protected $fillable=[
        'id_f',
        'hombres',
        'mujeres',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
