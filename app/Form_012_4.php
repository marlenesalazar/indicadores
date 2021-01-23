<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_012_4 extends Model
{
    protected $table='form_012_4s';
    protected $primaryKey='idf12_4';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'n_proyecto',
        'e_tematico',
        'e_principal',
        'e_financiera',
        't_ejecucion',
    	'gestion'
    ];

    protected $guarded=[
    	'idf12_4'
    ];
}
