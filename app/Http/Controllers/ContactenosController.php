<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Empresa;
use sisVentas\Http\Requests;
use sisVentas\Http\Controllers\Controller;
use sisVentas\Http\Requests\EmpresaFormRequest;
use sisVentas\Http\Requests\ContactenosFormRequest;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Contactenos;
use DB;

class ContactenosController extends Controller
{
    public function index(Request $request)
    {
        if ($request){

            $empresa=DB::table('detalle_empresa')
            ->orderBy('id_detalle','desc')
            ->paginate(7);

            $id=1;
            
            return view('almacen.contacto.contactenos',["empresa"=>$empresa]);
        }
    }

    public function store (ContactenosFormRequest $request){
        $contactenos=new Contactenos;
        $contactenos->nombre=$request->get('name');
        $contactenos->correo=$request->get('email');
        $contactenos->telefono=$request->get('phone');
        $contactenos->sugerencia=$request->get('message');
        $contactenos->save();
        return Redirect::to('almacen/contacto')->with('info','Sugerencia enviada correctamente');
    }
}
