<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_013_3 extends Model
{
    protected $table='form_013_3s';
    protected $primaryKey='idf13_3';
    public $timestamps=false;
    protected $fillable=[
        'univ',
        'id_c',
        'sede',
        't1',
        't2',
        't3',
        't4',
        't5',
        't6',
        't7',
        't8',
        't9'
    	'gestion'
    ];

    protected $guarded=[
    	'idf13_3'
    ];
}
