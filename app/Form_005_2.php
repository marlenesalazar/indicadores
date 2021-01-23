<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_005_2 extends Model
{
    protected $table='form_005_2s';
    protected $primaryKey='idf5_2';
    public $timestamps=false;
    protected $fillable=[
        'biblioteca',
        'l_nacionales',
        'l_exatrnjero',
        'tesis',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
