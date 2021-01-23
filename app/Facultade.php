<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultade extends Model
{
     protected $table='facultades';
    protected $primaryKey='id_f';
    public $timestamps=false;
    protected $fillable=[
    	'nombre_f',
    ];

    protected $guarded=[
        'id_f'
    ];
}
