<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_005_3 extends Model
{
    protected $table='form_005_3s';
    protected $primaryKey='idf5_3';
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
