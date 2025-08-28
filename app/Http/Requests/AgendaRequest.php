<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
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
        'event_name'=>'required|string|min:10|max:255',
        'description'=>'required|string|min:5|max:255',
        'date'=>'required|min:6',
        'time'=>'required',
        'duration'=>'required|min:5|max:20',
        'place'=>'required|min:3|max:255',
        'event_status'=>'required|string|min:5|max:20',
        'customer_id'=>'required',

        ];
    }

    public function messages(){

        return[
        'event_name.required'=>'El nombre del evento es requerido',
        'event_name.string'=>'Solo se permiten caracteres',
        'event_name.min'=>'El nombre del evento debe contener al menos 5 caracteres',
        'event_name.max'=>'El nombre del evento no puede contener mas de 255 caracteres ',

        'description.required'=>'La descripcion del evento es requerido',
        'description.string'=>'Solo se permiten caracteres',
        'description.min'=>'La descripcion del evento debe contener al menos 20 caracteres',
        'description.max'=>'La descripcion del evento no puede contener mas de 255 caracteres ',

        'date.required'=>'La fecha del evento es requerida',
        'date.min'=>'La fecha debe contener al menos 6 caracteres',

        'time.required'=>'La hora del evento es requerida',

        'duration.required'=>'La duracion del evento es requerido',
        'duration.min'=>'La duracion del evento debe contener al menos 5 caracteres',
        'duration.max'=>'La duracion del evento no puede contener mas de 20 caracteres ',

        'place.required'=>'El lugar del evento es requerido',
        'place.min'=>'El lugar del evento debe contener al menos 10 caracteres',
        'place.max'=>'El lugar del evento no puede contener mas de 255 caracteres ',

        'event_status.required'=>'El estado del evento es requerido',
        'event_status.string'=>'Solo se permiten caracteres',
        'event_status.min'=>'El estado del evento debe contener al menos 10 caracteres',
        'event_status.max'=>'El estado del evento no puede contener mas de 20 caracteres ',

        'customer.required'=>'El nombre del cliente es requerido',


        ];


    }



}



