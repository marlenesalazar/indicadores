<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_15 extends Model
{
    protected $table='form_001_15s';
    protected $primaryKey='idf1_15';
    public $timestamps=false;
    protected $fillable=[
        'id_p',
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
