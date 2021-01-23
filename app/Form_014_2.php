<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_014_2 extends Model
{
    protected $table='form_014_1s';
    protected $primaryKey='idf14_1';
    public $timestamps=false;
    protected $fillable=[
    	'univ',
    	'id_c',
    	'sede',
    	'tesis',
    	'reprobados',
    	'abandonos',
    	'total',
    	'gestion'
    ];

    protected $guarded=[
        'idf14_1'
    ];
}
