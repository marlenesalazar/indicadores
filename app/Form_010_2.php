<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_010_2 extends Model
{
    protected $table='form_010_2s';
    protected $primaryKey='idf10_2';
    public $timestamps=false;
    protected $fillable=[
    	'fte',
    	'descripcion',
    	'presupuestos',
    	'ejecucion',
    	'percibido',
    	'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
        'idf10_2'
    ];
}
