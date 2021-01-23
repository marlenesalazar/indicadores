<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_017_3 extends Model
{
    protected $table='form_017_3s';
    protected $primaryKey='idf17_3';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'n_convenios',
    	'indice',
    	'gestion'
    ];

    protected $guarded=[
        'idf17_3'
    ];
}
