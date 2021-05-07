<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $table='trabajo';

    protected $primaryKey='id_trabajo';

    public $timestamps=false;


    protected $fillable =[
    	'descripcion',
    	'fecha_inicio',
        'costo_trabajo',
        'dispositivo_serial',
    	'estado_trabajo_id_estado'
    ];

    protected $guarded =[

    ];

}