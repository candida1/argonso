<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Evidence_sectionRequest extends FormRequest
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
        'type_evidence'=>'required|string|min:3|max:255',
        'description'=>'required|string|min:5|max:255',
        'registration_date'=>'required',
        'state_evidence'=>'required|string|min:3|max:255',

        ];
    }

    public function messages(){

        return[
        'type_evidence.required'=>'El tipo de evidencia es requerido',
        'type_evidence.string'=>'Solo se permiten caracteres',
        'type_evidence.min'=>'El tipo de evidencia debe contener al menos 10 caracteres',
        'type_evidence.max'=>'El tipo de evidencia no puede contener mas de 255 caracteres ',

        'description.required'=>'La descripción de la evidencia es requerido',
        'description.string'=>'Solo se permiten caracteres',
        'description.min'=>'La descripción de la evidencia debe contener al menos 5 caracteres',
        'description.max'=>'La descripción de la evidencia no puede contener mas de 255 caracteres ',

        'registration_date.required'=>'El registro de la evidencia es requerido',

        'state_evidence.required'=>'El estado de la evidencia es requerido',
        'state_evidence.string'=>'Solo se permiten caracteres',
        'state_evidence.min'=>'El estado de la evidencia debe contener al menos . caracteres',
        'state_evidence.max'=>'El estado de la evidencia no puede contener mas de 255 caracteres ',


        ];


    }



}
