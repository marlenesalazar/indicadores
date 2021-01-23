<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_006_3 extends Model
{
    protected $table='form_006_3s';
    protected $primaryKey='idf6_3';
    public $timestamps=false;
    protected $fillable=[
        'unidad',
        'm_d',
        'f_d',
        't_d',
        'm_m',
        'f_m',
        't_m',
        'm_dip',
        'f_dip',
        't_dip',
        'total',
        'gestion'
    ];

    protected $guarded=[
    	
    ];
}
