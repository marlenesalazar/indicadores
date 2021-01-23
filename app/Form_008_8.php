<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_008_8 extends Model
{
    protected $table='form_008_8s';
    protected $primaryKey='idf8_8';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'evento',
        'participantes',
        'e_tematico',
        'resultados',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
