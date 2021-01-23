<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_017_5 extends Model
{
    protected $table='form_017_5s';
    protected $primaryKey='idf17_5';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'n_convenios',
    	'indice',
    	'gestion'
    ];

    protected $guarded=[
        'idf17_5'
    ];
}
