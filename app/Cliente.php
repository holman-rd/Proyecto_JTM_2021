<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';

    protected $primaryKey='id_cliente';

    public $timestamps=false;


    protected $fillable =[
    	'nombre',
    	'telefono',
        'direccion',
        'no_documento',
    	'correo'
    ];

    protected $guarded =[

    ];

}