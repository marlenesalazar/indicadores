<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_008_1 extends Model
{
    protected $table='form_008_1s';
    protected $primaryKey='idf8_1';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'instituto',
        'basica',
        'aplicada',
        'experimental',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
