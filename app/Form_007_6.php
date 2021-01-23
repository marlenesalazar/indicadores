<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_007_6 extends Model
{
    protected $table='form_007_6s';
    protected $primaryKey='idf7_6';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'artes',
        'agronomia',
        'cc_ee',
        'c_puras',
        'cc_ss',
        'derecho',
        'ingenieria',
        'geologica',
        'minera',
        'tecnologica',
        'salud',
        'medicina',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
