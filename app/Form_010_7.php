<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_010_7 extends Model
{
    protected $table='form_010_7s';
    protected $primaryKey='idf10_7';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'e_oficina',
    	'p_ejecutado',
    	'indicador',
    	'gestion'
    ];

    protected $guarded=[
        'idf10_7'
    ];
}
