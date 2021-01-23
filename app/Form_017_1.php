<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_017_1 extends Model
{
    protected $table='form_017_1s';
    protected $primaryKey='idf17_1';
    public $timestamps=false;
    protected $fillable=[
    	'año',
    	'n_convenios',
    	'indice',
    	'gestion'
    ];

    protected $guarded=[
        'idf17_1'
    ];
}
