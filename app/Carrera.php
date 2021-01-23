<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table='carreras';
    protected $primaryKey='id_c';
    public $timestamps=false;
    protected $fillable=[
    	'id_c',
        'id_f',
        'nombre_c'
    ];

    protected $guarded=[
    	
    ];
}
