<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_018_3 extends Model
{
    protected $table='form_018_3s';
    protected $primaryKey='idf18_3';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	't_publicados',
    	'incremento'
    ];

    protected $guarded=[
        'idf18_3'
    ];
}

