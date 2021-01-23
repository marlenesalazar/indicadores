<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_004_5 extends Model
{
    protected $table='form_004_5s';
    protected $primaryKey='idf4_5';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'm_c',
        'f_c',
        't_c',
        'm_p',
        'f_p',
        't_p',
        'total',
        'porcentaje',
        'gestion'
    ];

    protected $guarded=[
        
    ];
}
