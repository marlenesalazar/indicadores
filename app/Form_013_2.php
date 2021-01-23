<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_013_2 extends Model
{
    protected $table='form_013_2s';
    protected $primaryKey='idf13_2';
    public $timestamps=false;
    protected $fillable=[
        'univ',
        'id_c',
        'sede',
        'tesis',
        'p_grado',
        'e_grado',
        'i_rotatorio',
        'p_excelencia',
        't_dirigido',
        'pasantia',
        'monografia',
        'a_egresados'
    	'gestion'
    ];

    protected $guarded=[
    	'idf13_2'
    ];
}
