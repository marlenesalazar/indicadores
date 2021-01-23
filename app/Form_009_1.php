<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_009_1 extends Model
{
    protected $table='form_009_1s';
    protected $primaryKey='idf9_1';
    public $timestamps=false;
    protected $fillable=[
    	'obras',
    	'sup',
    	'costo',
    	'gestion'
    ];

    protected $guarded=[
        'idf9_1'
    ];
}
