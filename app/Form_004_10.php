<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_004_10 extends Model
{
   protected $table='form_004_10s';
    protected $primaryKey='idf4_10';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'titular',
        'invitado',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
