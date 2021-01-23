<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_009_5 extends Model
{
    protected $table='form_009_5s';
    protected $primaryKey='idf9_5';
    public $timestamps=false;
    protected $fillable=[
    	'id_f',
    	'aulas',
    	'estudiantes',
    	'indicador',
    	'gestion'
    ];

    protected $guarded=[
        'idf9_5'
    ];
}
