<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_005_20 extends Model
{
    protected $table='form_005_20s';
    protected $primaryKey='idf5_20';
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
