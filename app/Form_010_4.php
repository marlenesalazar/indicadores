<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_010_4 extends Model
{
    protected $table='form_010_4s';
    protected $primaryKey='idf10_4';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'p_aprobado',
    	'p_ejecutado',
    	'indicador',
    	'gestion'
    ];

    protected $guarded=[
        'idf10_4'
    ];
}
