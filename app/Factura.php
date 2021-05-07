<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table='factura';

    protected $primaryKey='id_datos';

    public $timestamps=false;

    protected $fillable =[
        'fecha',
    	'ciudad',
    	'estado',
        'detalle_empresa_id_detalle'
    ];

    protected $guarded =[

    ];
}
