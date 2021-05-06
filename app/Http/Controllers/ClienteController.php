<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Http\Requests;
use sisVentas\Cliente;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\ClienteFormRequest;
use DB;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request){

            $query0=trim($request->get('searchText0'));

            $cliente=DB::table('cliente')
            ->where('nombre','LIKE', '%'.$query0.'%')
            ->orderBy('id_cliente','desc')
            ->paginate(10);
            
            return view('almacen.cliente.index',["cliente"=>$cliente,"searchText0"=>$query0]);
        }
    }

    //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
    public function store (ClienteFormRequest $request){
        $cliente=new Cliente;
        $cliente->nombre=$request->get('nombre');
        $cliente->telefono=$request->get('telefono');
        $cliente->direccion=$request->get('direccion');
        $cliente->no_documento=$request->get('no_documento');
        $cliente->correo=$request->get('correo');
        $cliente->save();
        return Redirect::to('almacen/cliente');
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

    //Método para eliminar registros de una tabla, redirecciona a la vista que este indicada en el método index
    public function destroy($id){
        $cliente=Cliente::findOrFail($id);
        $cliente->delete();
        return Redirect::to('almacen/cliente');
    }
   
}
