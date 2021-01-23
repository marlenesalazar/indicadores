<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_008_7 extends Model
{
    protected $table='form_008_7s';
    protected $primaryKey='idf8_7';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'revista',
        'participantes',
        'e_tematico',
        'resultados',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
