<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_005_18 extends Model
{
    protected $table='form_005_18s';
    protected $primaryKey='idf5_18';
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
