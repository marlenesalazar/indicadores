<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_12 extends Model
{
    protected $table='form_001_12s';
    protected $primaryKey='idf1_12';
    public $timestamps=false;
    protected $fillable=[
        'contrato',
        'msc',
        'esp',
        'dip',
        'lic',
        'egr',
        'ts',
        'prof',
        'tm',
        'es',
        'emp',
        'obr',
        'total',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
