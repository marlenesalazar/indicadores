<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form_003_3 extends Model
{
    protected $table='form_003_3s';
    protected $primaryKey='idf3_3';
    public $timestamps=false;
    protected $fillable=[
        'id_c',
        'beni',
        'pando',
        'chuq',
        'cbba',
        'lapaz',
        'oruro',
        'stacruz',
        'potosi',
        'tarija',
        'exterior',
        'total',
    	'gestion'
    ];

    protected $guarded=[
    	
    ];
}
