<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Change_historyRequest extends FormRequest
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
        'date'=>'required|min:6',
        'time'=>'required',
        'assigned_attorner'=>'required|min:20',
        'action_taken'=>'required|string|min:10|max:255',
        'reason_change'=>'required|string|min:10|max:255',
        'case_customer_id'=>'required',

        ];
    }


    public function messages(){

        return[
        'date.required'=>'La fecha del cambio es requerido',
        'date.min'=>'La fecha del cambio debe contener al menos 6 caracteres',

        'time.required'=>'La hora del cambio es requerida',

        'assigned_attorner.required'=>'El nombre del abogado asignado requerido',
        'assigned_attorner.min'=>'El nombre del abogado asignado debe contener al menos 20 caracteres',

        'action_taken.required'=>'La acción realizada es requerida',
        'action_taken.string'=>'Solo se permiten caracteres',
        'action_taken.min'=>'La acción realizada debe contener al menos 10 caracteres',
        'action_taken.max'=>'La acción realizada no puede contener mas de 255 caracteres ',


        'reason_change.required'=>'La razón de cambio es requerida',
        'reason_change.string'=>'Solo se permiten caracteres',
        'reson_change.min'=>'La razón del cambio debe contener al menos 10 caracteres',
        'reason_change.max'=>'La razón del cambio no puede contener mas de 255 caracteres ',

        'case_customer.required'=>'El caso del cliente es requerido',

        ];


    }



}
