<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_015_3 extends Model
{
    protected $table='form_015_3s';
    protected $primaryKey='idf15_3';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'c_evaluacion',
    	'carreras',
    	'indicador'
    ];

    protected $guarded=[
        'idf15_3'
    ];
}
