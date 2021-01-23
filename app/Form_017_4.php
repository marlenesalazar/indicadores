<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_017_4 extends Model
{
    protected $table='form_017_4s';
    protected $primaryKey='idf17_4';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'n_convenios',
    	'indice',
    	'gestion'
    ];

    protected $guarded=[
        'idf17_4'
    ];
}
