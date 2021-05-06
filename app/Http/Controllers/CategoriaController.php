<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Http\Requests;
use sisVentas\Categoria;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\CategoriaFormRequest;
use DB;


class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request){

            $categoria=DB::table('categoria')
            ->orderBy('id_categoria','asc')
            ->paginate(10);
            
            return view('almacen.categoria.index',["categoria"=>$categoria]);
        }
    }

    //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
    public function store (CategoriaFormRequest $request){
        $categoria=new Categoria;
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->save();
        return Redirect::to('almacen/categoria');
    }

    //Método que actualiza los datos provenientes del formulario de una vista en una tabla de la bd
    public function update(CategoriaFormRequest $request,$id){
        $categoria=Categoria::findOrFail($id);
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->update();
        return Redirect::to('almacen/categoria');
    }

    //Método para eliminar registros de una tabla, redirecciona a la vista que este indicada en el método index
    public function destroy($id){
        $categoria=Categoria::findOrFail($id);
        $categoria->delete();
        return Redirect::to('almacen/categoria');
    }
   
}
