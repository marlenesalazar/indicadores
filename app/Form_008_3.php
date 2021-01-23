<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_008_3 extends Model
{
    protected $table='form_008_3s';
    protected $primaryKey='idf8_3';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'proyecto',
        'e_tematico',
        'investigador',
        'e_financiera',
        't_ejecucion',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
