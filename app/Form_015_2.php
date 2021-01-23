<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_015_2 extends Model
{
    protected $table='form_015_2s';
    protected $primaryKey='idf15_2';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'c_evaluadas',
    	'carreras',
    	'indicador'
    ];

    protected $guarded=[
        'idf15_2'
    ];
}
