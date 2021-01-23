<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_13 extends Model
{
    protected $table='form_001_13s';
    protected $primaryKey='idf1_13';
    public $timestamps=false;
    protected $fillable=[
        'actividad',
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
