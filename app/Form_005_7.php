<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_005_7 extends Model
{
    protected $table='form_005_7s';
    protected $primaryKey='idf5_7';
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
