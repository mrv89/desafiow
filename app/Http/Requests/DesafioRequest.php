<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DesafioRequest extends Request
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
            'nombre'    => 'required|min:5',
            'titulo'    => 'required|min:3',
            'mision'    => 'required',
            'contenido' => 'required',
            'video_url' => 'required',
            'fecha_creacion'     => 'required|date'
        ];
    }
}
