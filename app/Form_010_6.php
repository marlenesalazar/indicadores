<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_010_6 extends Model
{
    protected $table='form_010_6s';
    protected $primaryKey='idf10_6';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'construcciones',
    	'p_ejecutado',
    	'indicador',
    	'gestion'
    ];

    protected $guarded=[
        'idf10_6'
    ];
}
