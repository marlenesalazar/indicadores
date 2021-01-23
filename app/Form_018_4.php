<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_018_4 extends Model
{
    protected $table='form_018_4s';
    protected $primaryKey='idf18_4';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	't_estudiantes_p',
    	'incremento'
    ];

    protected $guarded=[
        'idf18_4'
    ];
}

