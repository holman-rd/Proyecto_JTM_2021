<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Http\Requests;
use sisVentas\Dispositivo;
use sisVentas\Categoria;
use sisVentas\Cliente;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\DispositivoFormRequest;
use DB;


class DispositivoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request){

            $dispositivo=DB::table('dispositivo')
            ->orderBy('serial','asc')
            ->paginate(10);

            $cliente=DB::table('cliente')
            ->orderBy('id_cliente','desc')
            ->paginate(10);

            $categoria=DB::table('categoria')
            ->orderBy('id_categoria','asc')
            ->paginate(10);
            
            return view('almacen.dispositivo.index',["dispositivo"=>$dispositivo, "cliente"=>$cliente, "categoria"=>$categoria]);
        }
    }

    //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
    public function store (DispositivoFormRequest $request){
        $dispositivo=new Dispositivo;
        $dispositivo->marca=$request->get('marca');
        $dispositivo->cliente_id_cliente=$request->get('cliente_id_cliente');
        $dispositivo->categoria_id_categoria=$request->get('categoria_id_categoria');
        $dispositivo->save();
        return Redirect::to('almacen/dispositivo');
    }

    //Método que actualiza los datos provenientes del formulario de una vista en una tabla de la bd
    public function update(DispositivoFormRequest $request,$id){
        $dispositivo=Dispositivo::findOrFail($id);
        $dispositivo->marca=$request->get('marca');
        $dispositivo->cliente_id_cliente=$request->get('cliente_id_cliente');
        $dispositivo->categoria_id_categoria=$request->get('categoria_id_categoria');
        $dispositivo->update();
        return Redirect::to('almacen/dispositivo');
    }

    //Método para eliminar registros de una tabla, redirecciona a la vista que este indicada en el método index
    public function destroy($id){
        $dispositivo=Dispositivo::findOrFail($id);
        $dispositivo->delete();
        return Redirect::to('almacen/dispositivo');
    }
   
}
