<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_009_2 extends Model
{
    protected $table='form_009_2s';
    protected $primaryKey='idf9_2';
    public $timestamps=false;
    protected $fillable=[
    	'obras',
    	'sup',
    	'costo',
    	'gestion'
    ];

    protected $guarded=[
        'idf9_2'
    ];
}
