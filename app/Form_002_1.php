<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_002_1 extends Model
{
    protected $table='form_002_1s';
    protected $primaryKey='idf2_1';
    public $timestamps=false;
    protected $fillable=[
        'id_f',
        'hombres',
        'mujeres',
        'total',
        'porcentaje',
        'gestion'
    ];

    protected $guarded=[
        
    ];
}
