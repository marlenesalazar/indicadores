<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_009_4 extends Model
{
    protected $table='form_009_4s';
    protected $primaryKey='idf9_4';
    public $timestamps=false;
    protected $fillable=[
    	'obras',
    	'sup',
    	'costo',
    	'gestion'
    ];

    protected $guarded=[
        'idf9_4'
    ];
}
