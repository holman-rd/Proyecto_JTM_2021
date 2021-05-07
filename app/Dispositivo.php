<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    protected $table='dispositivo';

    protected $primaryKey='serial';

    public $timestamps=false;


    protected $fillable =[
        'serial',
    	'marca',
    	'cliente_id_cliente',
        'categoria_id_categoria'
    ];

    protected $guarded =[

    ];

}
