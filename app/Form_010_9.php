<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_010_9 extends Model
{
    protected $table='form_010_9s';
    protected $primaryKey='idf10_9';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'i_social',
    	'p_ejecutado',
    	'indicador',
    	'gestion'
    ];

    protected $guarded=[
        'idf10_9'
    ];
}
