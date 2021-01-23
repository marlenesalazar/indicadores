<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table='registros';
    protected $primaryKey='idreg';
    public $timestamps=false;
    protected $fillable=[
    	//'id_for',
    	'gestion'
    ];

    protected $guarded=[
    ];

}
