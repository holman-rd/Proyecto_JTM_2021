<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class TrabajoFormRequest extends Request
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
            'descripcion'=>'required|max:256',
    	    'fecha_inicio'=>'required|max:45',
            'costo_trabajo'=>'required|max:45',
            'dispositivo_serial'=>'required|max:45',
            'estado_trabajo_id_estado=>required|max:45',
        ];
    }
}

