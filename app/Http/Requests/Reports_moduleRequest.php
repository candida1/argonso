<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Reports_moduleRequest extends FormRequest
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
        'customer_name'=>'required|string|min:10|max:255',
        'assigned_attomey'=>'required|string|min:10|max:255',
        'status_case'=>'required|string|min:10|max:255',
        'date_writting'=>'required',
        'type_report'=>'required|string|min:10|max:255',

        ];
    }


    public function messages(){

        return[
        'customer_name.required'=>'El nombre del cliente es requerido',
        'customer_name.string'=>'Solo se permiten caracteres',
        'customer_name.min'=>'El nombre del cliente debe contener al menos 10 caracteres',
        'customer_name.max'=>'El nombre del cliente no puede contener mas de 255 caracteres ',

        'assigned_attomey.required'=>'El nombre del abogado asignado es requerido',
        'assigned_attomey.string'=>'Solo se permiten caracteres',
        'assigned_attomey.min'=>'El nombre del abogado asignado debe contener al menos 10 caracteres',
        'assigned_attomey.max'=>'El nombre del abogado asignado no puede contener mas de 255 caracteres ',

        'status_case.required'=>'El estado del caso es requerido',
        'status_case.string'=>'Solo se permiten caracteres',
        'status_case.min'=>'El estado del caso debe contener al menos 10 caracteres',
        'status_case.max'=>'El estado del caso no puede contener mas de 255 caracteres ',

        'date_writting.required'=>'La fecha de redacción es requerida',

        'type_report.required'=>'El tipo de reporte es requerida',
        'type_report.string'=>'Solo se permiten caracteres',
        'type_report.min'=>'El tipo de reporte  debe contener al menos 10 caracteres',
        'type_report.max'=>'El tipo de reporte no puede contener mas de 255 caracteres ',


        ];


    }








}
