<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Contactenos extends Model
{
    protected $table='sugerencia';

    protected $primaryKey='id_sugerencia';

    public $timestamps=false;


    protected $fillable =[
    	'nombre',
    	'correo',
        'telefono',
        'sugerencia'
    ];

    protected $guarded =[

    ];
}
