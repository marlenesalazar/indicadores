<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_018_1 extends Model
{
    protected $table='form_018_1s';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable=[
    	'titulo',
    	'autor',
    	'cantidad',
    	'año',
    	'carrera',
    	'gestion'
    ];

    protected $guarded=[
        'id'
    ];
} 
