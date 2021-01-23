<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_002_3 extends Model
{
    protected $table='form_002_3s';
    protected $primaryKey='idf2_3';
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
