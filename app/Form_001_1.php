<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_1 extends Model
{
    protected $table='form_001_1s';
    protected $primaryKey='idf1_1';
    public $timestamps=false;
    protected $fillable=[
        'id_ca',
        'exc_m',
        'tc_m',
        'th_m',
        'total_m',
        'exc_h',
        'tc_h',
        'th_h',
        'total_h',
        'exc_t',
        'tc_t',
        'th_t',
        'total_t',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
