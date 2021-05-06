<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Http\Requests;
use sisVentas\EstadoTrabajo;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\EstadoTrabajoFormRequest;
use DB;


class EstadoTrabajoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request){

            $estadotrabajo=DB::table('estado_trabajo')
            ->orderBy('id_estado','asc')
            ->paginate(10);
            
            return view('almacen.estadotrabajo.index',["estadotrabajo"=>$estadotrabajo]);
        }
    }

    //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
    public function store (EstadoTrabajoFormRequest $request){
        $estadotrabajo=new EstadoTrabajo;
        $estadotrabajo->nombre=$request->get('nombre');
        $estadotrabajo->descripcion=$request->get('descripcion');
        $estadotrabajo->save();
        return Redirect::to('almacen/estadotrabajo');
    }

    //Método que actualiza los datos provenientes del formulario de una vista en una tabla de la bd
    public function update(EstadoTrabajoFormRequest $request,$id){
        $estadotrabajo=EstadoTrabajo::findOrFail($id);
        $estadotrabajo->nombre=$request->get('nombre');
        $estadotrabajo->descripcion=$request->get('descripcion');
        $estadotrabajo->update();
        return Redirect::to('almacen/estadotrabajo');
    }

    //Método para eliminar registros de una tabla, redirecciona a la vista que este indicada en el método index
    public function destroy($id){
        $estadotrabajo=EstadoTrabajo::findOrFail($id);
        $estadotrabajo->delete();
        return Redirect::to('almacen/estadotrabajo');
    }
   
}
