<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_003_2 extends Model
{
    protected $table='form_003_2s';
    protected $primaryKey='idf3_2';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'mujeres',
        'hombres',
        'total',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
