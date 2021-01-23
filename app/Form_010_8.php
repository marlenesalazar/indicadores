<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_010_8 extends Model
{
    protected $table='form_010_8s';
    protected $primaryKey='idf10_8';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'c_persola',
    	'p_ejecutado',
    	'indicador',
    	'gestion'
    ];

    protected $guarded=[
        'idf10_8'
    ];
}
