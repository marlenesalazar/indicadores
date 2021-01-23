<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_013_1 extends Model
{
    protected $table='form_013_1s';
    protected $primaryKey='idf13_1';
    public $timestamps=false;
    protected $fillable=[
        'univ',
        'id_c',
        'sede',
        'aprobados',
        'reprobados',
        'abandonos',
        'total',
    	'gestion'
    ];

    protected $guarded=[
    	'idf13_1'
    ];
}
