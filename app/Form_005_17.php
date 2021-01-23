<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_005_17 extends Model
{
    protected $table='form_005_17s';
    protected $primaryKey='idf5_17';
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
