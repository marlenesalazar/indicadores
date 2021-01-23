<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profecione extends Model
{
    protected $table='profeciones';
    protected $primaryKey='id_p';
    public $timestamps=false;
    protected $fillable=[
        'id_p',
        'nombre_p'
    ];

    protected $guarded=[
    	
    ]; //
}
