<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\DetalleFactura;
use sisVentas\Trabajo;
use sisVentas\Factura;
use sisVentas\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\DetalleFacturaFormRequest;
use DB;

class DetalleFacturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request){

            $detallef=DB::table('detalle_factura as df')
            ->join('trabajo as tra','df.trabajo_id_trabajo','=','tra.id_trabajo')
            ->join('factura as fac','df.factura_id_datos','=','fac.id_datos')
            ->select('df.id_detalle','df.valor_total','tra.fecha_inicio as trabajo_id_trabajo','fac.fecha as factura_id_datos')
            ->orderBy('id_detalle','asc')
            ->paginate(10);

            $trabajo=DB::table('trabajo')->get();
            $factura=DB::table('factura')->get();

            
            return view('almacen.detallefactura.index',["detallef"=>$detallef, "trabajo"=>$trabajo, "factura"=>$factura]);
        }
    }

    //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
    public function store (DetalleFacturaFormRequest $request){
        $detallef=new DetalleFactura;
        $detallef->valor_total=$request->get('valor_total');
        $detallef->trabajo_id_trabajo=$request->get('trabajo_id_trabajo');
        $detallef->factura_id_datos=$request->get('factura_id_datos');
        $detallef->save();
        return Redirect::to('almacen/detallefactura')->with('info','Detalle Agregado Correctamente');
    }

    //Método que actualiza los datos provenientes del formulario de una vista en una tabla de la bd
    public function update(DetalleFacturaFormRequest $request,$id){
        $detallef=DetalleFactura::findOrFail($id);
        $detallef->valor_total=$request->get('valor_total');
        $detallef->trabajo_id_trabajo=$request->get('trabajo_id_trabajo');
        $detallef->factura_id_datos=$request->get('factura_id_datos');
        $detallef->update();
        return Redirect::to('almacen/detallefactura')->with('info','Registro Actualizado Correctamente');
    }

    //Método para eliminar registros de una tabla, redirecciona a la vista que este indicada en el método index
    public function destroy($id){
        $detallef=DetalleFactura::findOrFail($id);
        $detallef->delete();
        return Redirect::to('almacen/detallefactura')->with('info','Registro Eliminado Correctamente');
    }
}
