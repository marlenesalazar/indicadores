<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_008_6 extends Model
{
    protected $table='form_008_6s';
    protected $primaryKey='idf8_6';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'proyecto',
        'participantes',
        'e_tematico',
        'resultados',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
