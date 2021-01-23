<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_004_7 extends Model
{
    protected $table='form_004_7s';
    protected $primaryKey='idf4_7';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'completa',
        'parcial',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
