<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'file_name'=>'required|string|min:3|max:255',
        'type_document'=>'required|string|min:3|max:255',
        'date_compleiton'=>'required',
        'description'=>'required|string|min:3|max:255',
        'observation'=>'required|string|min:1|max:255',
        'file_path'=>'required',

        ];
    }


    public function messages(){

        return[
        'file_name.required'=>'El nombre del documento es requerido',
        'file_name.string'=>'Solo se permiten caracteres',
        'file_name.min'=>'El nombre del documento debe contener al menos 3 caracteres',
        'file_name.max'=>'El nombre del documento no puede contener mas de 255 caracteres ',

        'type_document.required'=>'El tipo de documento es requerido',
        'type_document.string'=>'Solo se permiten caracteres',
        'type_document.min'=>'El tipo de documento debe contener al menos 3 caracteres',
        'type_document.max'=>'El tipo de documento no puede contener mas de 255 caracteres ',

        'date_compleiton.required'=>'La fecha de finalización es requerido',

        'description.required'=>'La descripcion del documento es requerida',
        'description.string'=>'Solo se permiten caracteres',
        'description.min'=>'La descripcion del documento debe contener al menos 3 caracteres',
        'description.max'=>'La descripcion del documento  no puede contener mas de 255 caracteres ',

        'observation.required'=>'La observación del documento es requerida',
        'observation.string'=>'Solo se permiten caracteres',
        'observation.min'=>'La observación del documento debe contener al menos 1 caracteres',
        'observation.max'=>'La observación del documento  no puede contener mas de 255 caracteres ',

        'file_path.required'=>'La ruta del archivo es requerido',


        ];


    }



}
