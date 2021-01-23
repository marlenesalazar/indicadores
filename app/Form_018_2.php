<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_018_2 extends Model
{
    protected $table='form_018_2s';
    protected $primaryKey='idf18_2';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'l_publicados',
    	'incremento'
    ];

    protected $guarded=[
        'idf18_2'
    ];
}
