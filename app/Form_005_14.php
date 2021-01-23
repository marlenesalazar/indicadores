<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_005_14 extends Model
{
    protected $table='form_005_14s';
    protected $primaryKey='idf5_14';
    public $timestamps=false;
    protected $fillable=[
        'usuario',
        'obras_m',
        'lectores_m',
        'obras_f',
        'lectores_f',
        'total',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
