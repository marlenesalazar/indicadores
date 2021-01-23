<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_008_4 extends Model
{
    protected $table='form_008_4s';
    protected $primaryKey='idf8_4';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'proyecto',
        'e_tematico',
        'u_proponente',
        'investigador',
        'e_financiera',
        't_ejecucion',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
