<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_001_6 extends Model
{
    protected $table='form_001_6s';
    protected $primaryKey='idf1_6';
    public $timestamps=false;
    protected $fillable=[
        'id_ca',
        'm_aux',
        'f_aux',
        'st_aux',
        'm_inv',
        'f_inv',
        'st_inv',
        'm_to',
        'f_to',
        'total_to',
        'porcentaje',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
