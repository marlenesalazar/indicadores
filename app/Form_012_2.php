<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_012_2 extends Model
{
    protected $table='form_012_2s';
    protected $primaryKey='idf12_2';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'n_actividad',
        'libre',
        'interna',
        'externa',
    	'gestion'
    ];

    protected $guarded=[
    	'idf12_2'
    ];
}
