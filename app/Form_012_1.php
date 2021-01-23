<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_012_1 extends Model
{
    protected $table='form_012_1s';
    protected $primaryKey='idf12_1';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'n_centro',
        'libre',
        'interna',
        'externa',
    	'gestion'
    ];

    protected $guarded=[
    	'idf12_1'
    ];
}
