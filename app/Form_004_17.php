<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_004_17 extends Model
{
    protected $table='form_004_17s';
    protected $primaryKey='idf4_17';
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
