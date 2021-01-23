<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_010_5 extends Model
{
    protected $table='form_010_5s';
    protected $primaryKey='idf10_5';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'sueldos',
    	'p_ejecutado',
    	'indicador',
    	'gestion'
    ];

    protected $guarded=[
        
    ];
}
