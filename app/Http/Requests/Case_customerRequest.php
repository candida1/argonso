<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Case_customerRequest extends FormRequest
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
        'file_number'=>'required',
        'type_case'=>'required|string|min:3|max:255',
        'opening_date'=>'required|min:6',
        'status_case'=>'required|string|min:3|max:255',
        'description'=>'required|string|min:10|max:255',
        'priority'=>'required|string|min:3|max:255',
        'customer_id'=>'required',
        'lawyer_id'=>'required'

        ];
    }


    public function messages(){

        return[
        'file_number.required'=>'El número del archivo es requerido',

        'type_case.required'=>'El tipo de caso es requerido',
        'type_case.string'=>'Solo se permiten caracteres',
        'type_case.min'=>'El tipo de caso debe contener al menos 3 caracteres',
        'type_case.max'=>'El tipo de caso no puede contener mas de 255 caracteres ',

        'opening-date.required'=>'La fecha de apertura del caso es requerida',
        'opening_date.min'=>'La fecha de apertura del caso debe contener al menos 6 caracteres',

        'status_case.required'=>'El estado del caso es requerido',
        'status_case.string'=>'Solo se permiten caracteres',
        'status.min'=>'El estado del caso debe contener al menos 3 caracteres',
        'status.max'=>'El estado del caso no puede contener mas de 255 caracteres ',

        'description.required'=>'La descripcion del caso es requerido',
        'description.string'=>'Solo se permiten caracteres',
        'description.min'=>'La descripcion del caso debe contener al menos 10 caracteres',
        'description.max'=>'La descripcion del caso no puede contener mas de 255 caracteres ',

        'priority.required'=>'La prioridad del caso es requerido',
        'priority.string'=>'Solo se permiten caracteres',
        'priority.min'=>'La prioridad del caso debe contener al menos 3 caracteres',
        'priority.max'=>'La prioridad del caso no puede contener mas de 255 caracteres ',

        'customer.required'=>'El nombre del cliente es requerido',

        'lawyer.required'=>'El nombre del abogado es requerido',


        ];


    }


}
