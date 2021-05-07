<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Factura;
use sisVentas\Empresa;
use sisVentas\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\FacturaFormRequest;
use DB;

class FacturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request){

            $factura=DB::table('factura as f')
            ->join('detalle_empresa as det','f.detalle_empresa_id_detalle','=','det.id_detalle')
            ->select('f.id_datos','f.fecha','f.ciudad','f.estado','det.nombre_empresa as detalle_empresa_id_detalle')
            ->orderBy('id_datos','asc')
            ->paginate(10);

            $detalle=DB::table('detalle_empresa')->get();

            
            return view('almacen.factura.index',["factura"=>$factura, "detalle"=>$detalle]);
        }
    }


}
