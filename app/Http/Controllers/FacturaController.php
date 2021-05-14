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
            ->select('f.id_datos','f.fecha','f.ciudad','det.nombre_empresa as detalle_empresa_id_detalle')
            ->orderBy('id_datos','asc')
            ->paginate(10);

            $detalle=DB::table('detalle_empresa')->get();

            
            return view('almacen.factura.index',["factura"=>$factura, "detalle"=>$detalle]);
        }
    }

    //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
    public function store (FacturaFormRequest $request){
        $factura=new Factura;
        $factura->fecha=$request->get('fecha');
        $factura->ciudad=$request->get('ciudad');
        $factura->estado=$request->get('estado');
        $factura->detalle_empresa_id_detalle=$request->get('detalle_empresa_id_detalle');
        $factura->save();
        return Redirect::to('almacen/factura')->with('info','Factura Agregada Correctamente');
    }

    //Método que actualiza los datos provenientes del formulario de una vista en una tabla de la bd
    public function update(FacturaFormRequest $request,$id){
        $factura=Factura::findOrFail($id);
        $factura->fecha=$request->get('fecha');
        $factura->ciudad=$request->get('ciudad');
        $factura->estado=$request->get('estado');
        $factura->detalle_empresa_id_detalle=$request->get('detalle_empresa_id_detalle');
        $factura->update();
        return Redirect::to('almacen/factura')->with('info','Registro Actualizado Correctamente');
    }
    
    //Método para eliminar registros de una tabla, redirecciona a la vista que este indicada en el método index
    public function destroy($id){
        $factura=Factura::findOrFail($id);
        $factura->delete();
        return Redirect::to('almacen/factura')->with('info','Registro Eliminado Correctamente');
    }

}
