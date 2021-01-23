<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_003_4 extends Model
{
    protected $table='form_003_4s';
    protected $primaryKey='idf3_4';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'fis_c',
        'part_c',
        'fis_p',
        'part_p',
        'fis_i',
        'part_i',
        'fis_in',
        'part_in',
        'fis_e',
        'part_e',
        'total',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
