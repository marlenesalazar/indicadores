<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_011_2 extends Model
{
    protected $table='form_011_2s';
    protected $primaryKey='idf11_2';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'masculino',
        'femenino',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	'idf11_2'
    ];
}
