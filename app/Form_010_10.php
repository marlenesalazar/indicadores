<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_010_10 extends Model
{
    protected $table='form_010_10s';
    protected $primaryKey='idf10_10';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'becas',
    	'p_ejecutado',
    	'indicador',
    	'gestion'
    ];

    protected $guarded=[
        'idf10_10'
    ];

}
