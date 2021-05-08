<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Http\Requests;
use sisVentas\Trabajo;
use sisVentas\Dispositivo;
use sisVentas\EstadoTrabajo;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\TrabajoFormRequest;
use DB;


class TrabajoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request){

            $trabajo=DB::table('trabajo as t')
            ->join('dispositivo as disp','t.dispositivo_serial','=','disp.serial')
            ->join('estado_trabajo as et','t.estado_trabajo_id_estado','=','et.id_estado')
            ->select('t.id_trabajo','t.descripcion','t.fecha_inicio','t.costo_trabajo','disp.marca as dispositivo_serial','et.nombre as estado_trabajo_id_estado')
            ->orderBy('id_trabajo','asc')
            ->paginate(10);

            $dispositivo=DB::table('dispositivo')->get();

            $estadotrabajo=DB::table('estado_trabajo')->get();
            
            return view('almacen.trabajo.index',["trabajo"=>$trabajo,"dispositivo"=>$dispositivo,"estadotrabajo"=>$estadotrabajo]);
        }
    }

    //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
    public function store (TrabajoFormRequest $request){
        $trabajo=new Trabajo;
        $trabajo->descripcion=$request->get('descripcion');
        $trabajo->fecha_inicio=$request->get('fecha_inicio');
        $trabajo->costo_trabajo=$request->get('costo_trabajo');
        $trabajo->dispositivo_serial=$request->get('dispositivo_serial');
        $trabajo->estado_trabajo_id_estado=$request->get('estado_trabajo_id_estado');

        $trabajo->save();
        return Redirect::to('almacen/trabajo');
    }

    //Método que actualiza los datos provenientes del formulario de una vista en una tabla de la bd
    public function update(TrabajoFormRequest $request,$id){
        $trabajo=Trabajo::findOrFail($id);
        $trabajo->descripcion=$request->get('descripcion');
        $trabajo->fecha_inicio=$request->get('fecha_inicio');
        $trabajo->costo_trabajo=$request->get('costo_trabajo');
        $trabajo->dispositivo_serial=$request->get('dispositivo_serial');
        $trabajo->estado_trabajo_id_estado=$request->get('estado_trabajo_id_estado');

        $trabajo->update();
        return Redirect::to('almacen/trabajo');
    }

    //Método para eliminar registros de una tabla, redirecciona a la vista que este indicada en el método index
    public function destroy($id){
        $trabajo=Trabajo::findOrFail($id);
        $trabajo->delete();
        return Redirect::to('almacen/trabajo');
    }
   
}
