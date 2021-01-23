<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_009_3 extends Model
{
    protected $table='form_009_3s';
    protected $primaryKey='idf9_3';
    public $timestamps=false;
    protected $fillable=[
    	'obras',
    	'sup',
    	'costo',
    	'gestion'
    ];

    protected $guarded=[
        'idf9_3'
    ];
}
