<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_012_7 extends Model
{
    protected $table='form_012_7s';
    protected $primaryKey='idf12_7';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'n_evento',
        'n_participantes',
        'e_tematico',
        'resultados',
    	'gestion'
    ];

    protected $guarded=[
    	'idf12_7'
    ];
}
