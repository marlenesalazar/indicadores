<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_004_1 extends Model
{
    protected $table='form_004_1s';
    protected $primaryKey='idf4_1';
    public $timestamps=false;
    protected $fillable=[
        'beca',
        'completa',
        'parcial',
        'total',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
