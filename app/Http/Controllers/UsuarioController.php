<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;

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
}
