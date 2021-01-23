<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_006_2 extends Model
{
    protected $table='form_006_2s';
    protected $primaryKey='idf6_2';
    public $timestamps=false;
    protected $fillable=[
        'curso',
        'unidad',
        'gestion',
        'nivel'
    ];

    protected $guarded=[
    	
    ];
}
