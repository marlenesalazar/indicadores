<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_008_2 extends Model
{
    protected $table='form_008_2s';
    protected $primaryKey='idf8_2';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'sociedad',
        'basica',
        'aplicada',
        'experimental',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
