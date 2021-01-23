<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_002_2 extends Model
{
    protected $table='form_002_2s';
    protected $primaryKey='idf2_2';
    public $timestamps=false;
    protected $fillable=[
        'id_f',
        'm_l',
        'f_l',
        'st_l',
        'm_t',
        'f_t',
        'st_t',
        'total',
        'gestion'
    ];

    protected $guarded=[
        
    ];
}
