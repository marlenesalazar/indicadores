<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_003_1 extends Model
{
    protected $table='form_003_1s';
    protected $primaryKey='idf3_1';
    public $timestamps=false;
    protected $fillable=[
        'id_f',
        'mujeres',
        'hombres',
        'total',
        'porcentaje',
        'gestion'
    ];

    protected $guarded=[
        
    ];}


