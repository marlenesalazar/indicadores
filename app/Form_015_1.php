<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_015_1 extends Model
{
    protected $table='form_015_1s';
    protected $primaryKey='idf15_1';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'c_acreditas',
    	'carreras',
    	'indicador'
    ];

    protected $guarded=[
        'idf15_1'
    ];
}
