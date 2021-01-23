<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categorias';
    protected $primaryKey='id_ca';
    public $timestamps=false;
    protected $fillable=[
        'id_ca',
        'nombre_ca'
    ];

    protected $guarded=[
    	
    ];
}
