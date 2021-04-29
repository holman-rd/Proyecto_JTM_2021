<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\UsuarioFormRequest;
use DB;
use Illuminate\Foundation\Auth\User as AuthUser;
use sisVentas\User;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) {
            $usuario = DB::table('users')
                ->orderBy('id', 'asc')
                ->paginate(10);

            return view('usuario.index',["usuario"=>$usuario]); /* El "usuario" es la variable a usar en la vista */
        }
    }
      //Método que almacena los datos provenientes del formulario de una vista en una tabla de la bd
      public function store (UsuarioFormRequest $request){
        $usuario=new User;
        $usuario->name=$request->get('nombre');
        $usuario->email=$request->get('correo');
        $usuario->password=bcrypt($request->get('contraseña'));
        $usuario->save();
        return Redirect::to('usuario');
    }

    //Método que actualiza los datos provenientes del formulario de una vista en una tabla de la bd
    public function update(UsuarioFormRequest $request,$id){
        $usuario=User::findOrFail($id);
        $usuario->name=$request->get('nombre');
        $usuario->email=$request->get('email');
        $usuario->password=$request->get('password');
        $usuario->update();
        return Redirect::to('usuario');
    }

    //Método para eliminar registros de una tabla, redirecciona a la vista que este indicada en el método index
    public function destroy($id){
        $usuario=User::findOrFail($id);
        $usuario->delete();
        return Redirect::to('usuario')->with('info','Usuario Eliminado Correctamente');
    }
}
