<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_005_4 extends Model
{
    protected $table='form_005_4s';
    protected $primaryKey='idf5_4';
    public $timestamps=false;
    protected $fillable=[
        'usuario2',
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
