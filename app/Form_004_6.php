<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_004_6 extends Model
{
    protected $table='form_004_6s';
    protected $primaryKey='idf4_6';
    public $timestamps=false;
    protected $fillable=[
        'id_f',
        'completa',
        'parcial',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
