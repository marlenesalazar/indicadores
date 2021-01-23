<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_012_6 extends Model
{
    protected $table='form_012_6s';
    protected $primaryKey='idf12_6';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'n_proyecto',
        'n_participantes',
        'e_tematico',
        'resultados',
    	'gestion'
    ];

    protected $guarded=[
    	'idf12_6'
    ];
}
