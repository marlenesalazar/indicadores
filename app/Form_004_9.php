<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_004_9 extends Model
{
    protected $table='form_004_9s';
    protected $primaryKey='idf4_9';
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
