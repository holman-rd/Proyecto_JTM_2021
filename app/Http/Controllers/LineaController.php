<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Http\Requests;
use sisVentas\EstadoTrabajo;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\EstadoTrabajoFormRequest;
use DB;


class LineaController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request){

        	$query0=trim($request->get('searchText0'));

            /*$estadotrabajo=DB::table('trabajo as trab')
            ->orderBy('id_estado','asc')
            ->paginate(10);*/

            $trabajo=DB::table('trabajo as trab')
            ->join('dispositivo as disp','trab.dispositivo_serial','=','disp.serial')
            ->join('estado_trabajo as et','trab.estado_trabajo_id_estado','=','et.id_estado')
            ->select('trab.id_trabajo','trab.descripcion','trab.fecha_inicio','trab.costo_trabajo','trab.dispositivo_serial', 'trab.estado_trabajo_id_estado')
            ->where('trab.dispositivo_serial','=', $query0)
            ->orderBy('trab.id_trabajo','asc')
            ->paginate(10);
            
            return view('almacen.linea.index',["trabajo"=>$trabajo,"searchText0"=>$query0]);
        }
    }  


}
