<?php

namespace sisVentas\Http\Controllers;

use sisVentas\Http\Requests;
use Illuminate\Http\Request;
use sisVentas\Contactenos;
use DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request){

            $sugerencia=DB::table('sugerencia')
            ->orderBy('id_sugerencia','asc')
            ->paginate(10);
            
            return view('home',["sugerencia"=>$sugerencia]);
        }
    }

    public function destroy($id){
        $sugerencia=Contactenos::findOrFail($id);
        $sugerencia->delete();
        return Redirect::to('home')->with('info','Sugerencia Eliminada Correctamente');;
    }
}
