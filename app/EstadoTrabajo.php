<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class EstadoTrabajo extends Model
{
    protected $table='estado_trabajo';

    protected $primaryKey='id_estado';

    public $timestamps=false;


    protected $fillable =[
    	'nombre',
    	'descripcion'
    ];

    protected $guarded =[

    ];

}
