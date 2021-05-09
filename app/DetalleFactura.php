<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    protected $table='detalle_factura';

    protected $primaryKey='id_detalle';

    public $timestamps=false;

    protected $fillable =[
        'valor_total',
    	'trabajo_id_trabajo',
    	'factura_id_datos',
    ];

    protected $guarded =[

    ];
}
