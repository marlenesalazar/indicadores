<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_005_15 extends Model
{
    protected $table='form_005_15s';
    protected $primaryKey='idf5_15';
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
