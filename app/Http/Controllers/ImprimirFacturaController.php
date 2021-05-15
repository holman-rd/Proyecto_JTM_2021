<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\DetalleFactura;
use sisVentas\Cliente;
use sisVentas\Dispositivo;
use sisVentas\Trabajo;
use sisVentas\Empresa;
use sisVentas\Factura;
use sisVentas\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\ImprimirFacturaFormRequest;
use DB;

class ImprimirFacturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request){

            $detallef=DB::table('detalle_factura')->get();

            $trabajo=DB::table('trabajo')->get();

            $trabajo_fecha=DB::table('trabajo')->get();
            $trabajo_fecha=DB::select('select c.id_cliente,c.nombre,c.no_documento,c.telefono,t.fecha_inicio from cliente as c join dispositivo as d on (c.id_cliente=d.cliente_id_cliente) join trabajo as t on (d.serial=t.dispositivo_serial) GROUP by c.id_cliente,c.nombre,c.no_documento,c.telefono,t.fecha_inicio');

            $dispositivo=DB::table('dispositivo')->get();

            $cliente=DB::table('cliente')->get();

            $factura=DB::table('factura')->get();

            $empresa=DB::table('detalle_empresa')->get();

            return view('almacen.imprimir.index',["detallef"=>$detallef, "trabajo"=>$trabajo,'trabajo_fecha'=>$trabajo_fecha,'empresa'=>$empresa,'cliente'=>$cliente,'dispositivo'=>$dispositivo, "factura"=>$factura]);
        }
    }

    //Método que actualiza los datos provenientes del formulario de una vista en una tabla de la bd
    public function update(ClienteFormRequest $request,$id){
        $cliente=Cliente::findOrFail($id);
        $cliente->nombre=$request->get('nombre');
        $cliente->telefono=$request->get('telefono');
        $cliente->direccion=$request->get('direccion');
        $cliente->no_documento=$request->get('no_documento');
        $cliente->correo=$request->get('correo');
        $cliente->update();
        return Redirect::to('almacen/cliente');
    }
}
