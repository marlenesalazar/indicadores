<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_017_2 extends Model
{
    protected $table='form_017_2s';
    protected $primaryKey='idf17_2';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'n_convenios',
    	'indice',
    	'gestion'
    ];

    protected $guarded=[
        'idf17_2'
    ];
}
