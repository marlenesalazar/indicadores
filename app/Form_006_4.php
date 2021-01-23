<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_006_4 extends Model
{
    protected $table='form_006_4s';
    protected $primaryKey='idf6_4';
    public $timestamps=false;
    protected $fillable=[
        'nivel',
        'num',
        'curso',
        'unidad',
        'inicio',
        'fin',
        'gestion'
    ];

    protected $guarded=[
    	
    ];
}
