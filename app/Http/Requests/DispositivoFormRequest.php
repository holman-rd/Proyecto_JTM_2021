<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class DispositivoFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'serial'=>'required|max:45',
            'marca'=>'required|max:45',
    	    'cliente_id_cliente'=>'required|max:45',
            'categoria_id_categoria'=>'required|max:45',
        ];
    }
}

