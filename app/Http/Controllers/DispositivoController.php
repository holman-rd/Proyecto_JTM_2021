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

            $dispositivo=DB::table('dispositivo as d')
            ->join('cliente as cli','d.cliente_id_cliente','=','cli.id_cliente')
            ->join('categoria as cat','d.categoria_id_categoria','=','cat.id_categoria')
            ->select('d.serial','d.marca','cli.nombre as cliente_id_cliente','cat.nombre as categoria_id_categoria')
            ->orderBy('serial','asc')
            ->paginate(10);

            $cliente=DB::table('cliente')->get();

            $categoria=DB::table('categoria')->get();
            
            return view('almacen.dispositivo.index',["dispositivo"=>$dispositivo, "cliente"=>$cliente, "categoria"=>$categoria]);
        }
    }

    //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
    public function store (DispositivoFormRequest $request){
        $dispositivo=new Dispositivo;
        $dispositivo->serial=$request->get('serial');
        $dispositivo->marca=$request->get('marca');
        $dispositivo->cliente_id_cliente=$request->get('cliente_id_cliente');
        $dispositivo->categoria_id_categoria=$request->get('categoria_id_categoria');
        $dispositivo->save();
        return Redirect::to('almacen/dispositivo');
    }

    //Método que actualiza los datos provenientes del formulario de una vista en una tabla de la bd
    public function update(DispositivoFormRequest $request,$id){
        $dispositivo=Dispositivo::findOrFail($id);
        $dispositivo->serial=$request->get('serial');
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
