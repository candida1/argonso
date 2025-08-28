<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use  Illuminate\Validation\Rule;

class ActivityRequest extends FormRequest
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
        'date_activity'=>'required|string|min:10|max:255',
        'time'=>'required',
        'name_activity'=>'required|string|max:255',
        'description'=>'required|string|min:3|max:255',
        'attached_documents'=>'required|string|max:255',
        'type_activity'=>'required|max:255',
        'place'=>'required|string|max:255',
        'state'=>'required|string|max:255',
        'lawyer_id'=>'required',
        'reportmodule_id'=>'required',

        ];
    }


    public function messages(){

        return[
        'date_activity.required'=>'El nombre de la actividad es requerida',
        'date_activity.string'=>'Solo se permiten caracteres',
        'date_activity.min'=>'El nombre de la actividad debe contener al menos 10 caracteres',
        'date_activity.max'=>'El nombre de la actividad no puede contener mas de 255 caracteres ',

        'time.required'=>'La hora de la actividad es requerida',


        'name_activity.required'=>'El nombre de la actividad es requerida',
        'name_activity.string'=>'Solo se permiten caracteres',
        'name_activity.min'=>'El nombre de la actividad debe contener al menos 10 caracteres',
        'name_activity.max'=>'El nombre de la actividad no puede contener mas de 255 caracteres ',

        'description.required'=>'La descripción de la actividad es requerida',
        'description.string'=>'Solo se permiten caracteres',
        'description.min'=>'La descripción de la actividad debe contener al menos 20 caracteres',
        'description.max'=>'La descripción de la actividad no puede contener mas de 255 caracteres ',

        'attached_documents.required'=>'Los documentos adjuntos son requeridos',
        'attached_documents.string'=>'Solo se permiten caracteres',
        'attached_documents.max'=>'Los documentos adjuntos no puede contener mas de 255 caracteres ',

        'type_activity.required'=>'El tipo de actividad es requerido',
        'type_activity.string'=>'Solo se permiten caracteres',
        'type_activity.max'=>'El tipo de actividad no puede contener mas de 255 caracteres ',

        'place.required'=>'El lugar de la actividad es requerido',
        'place.string'=>'Solo se permiten caracteres',
        'place.min'=>'El lugar de la actividad debe contener al menos 10 caracteres',
        'place.max'=>'El lugar de la actividad no puede contener mas de 255 caracteres ',

        'state.required'=>'El estado de actividad es requerido',
        'state.string'=>'Solo se permiten caracteres',
        'state.min'=>'El estado de actividad debe contener al menos 10 caracteres',
        'state.max'=>'El estado de actividad no puede contener mas de 255 caracteres ',

        'lawyer.required'=>'El nombre del abogado es requerido',

        'report_module.required'=>'El nombre del reporte  es requerido',


        ];


    }



}
