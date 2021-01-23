<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_010_1 extends Model
{
    protected $table='form_010_1s';
    protected $primaryKey='idf10_1';
    public $timestamps=false;
    protected $fillable=[
    	'fte',
    	'descripcion',
    	'valor1',
    	'valor2',
    	'valor3',
    	'valor4',
    	'valor5',
    	'valor6',
    	'valor7',
    	'valor8',
    	'valor9',
    	'total',
    	'gestion'
    ];

    protected $guarded=[
        'idf10_1'
    ];
}
