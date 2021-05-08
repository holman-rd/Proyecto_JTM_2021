<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Empresa;
use sisVentas\Http\Requests;
use sisVentas\Http\Controllers\Controller;
use sisVentas\Http\Requests\EmpresaFormRequest;
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
}
