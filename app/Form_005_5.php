<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_005_5 extends Model
{
    protected $table='form_005_5s';
    protected $primaryKey='idf5_5';
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
