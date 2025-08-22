<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
            'name'=>'required|string|min:20|max:255.',
            'last_name'=>'required|string|min:20|max:255',
            'gender'=>'required',
            'identity_card'=>['nullable','string','min:16','max:20',Rule::unique('customers')->ignore($this->customer)],
            'telephone'=>'nullable|string|min:15',
            'address'=>'required|string|min:100|max:255',
            'email'=>['required','string','max:255',Rule::unique('customers')->ignore($this->customer)],
            'registration_date'=>'required|min:6'
        ];
    }


    public function messages(){
        return[
            'name.required'=>'El nombre del cliente es requerido',
            'name.string'=>'Solo se permiten caracteres',
            'name.min'=>'El nombre debe contener al menos 20 caracteres',
            'name.max'=>'El nombre no puede contener mas de 255 caracteres',

            'last_name.required'=>'El apellido del cliente es requerido',
            'last_name.string'=>'Solo se permiten caracteres',
            'last_name.min'=>'El apellido debe contener al menos 20 caracteres',
            'last_name.max'=>'El apellido no puede contener mas de 255 caracteres',

            'gender.required'=>'El genero del cliente es requerida',

            'identity_card.string'=>'La identificación del cliente solo se permiten caracteres',
            'identity_card.unique'=>'La identificacion del cliente es unica',
            'identity_card.min'=>'La identificación del cliente tiene un minimo de 16 caracteres',
            'identity_card.max'=>'La identificación del cliente tienen un maximo de 20 caracteres',


            'telephone.required'=>'El número de telefono es requerido',
            'telephone.string'=>'El número de telefono del cliente solo permite caracteres',
            'telephone.min'=>'El minimo de caracteres del telefono necesarios es de 15',


            'address.required'=>'La direccion del cliente es requerida.',
            'address.string'=>'Solo se permiten caracteres.',
            'address.min'=>'El minimo de caracteres de la dirección es de 100.',
            'address.max'=>'El maximo de caracteres de la dirección de 255.',


            'email.required'=>'El correo electronico del cliente es requerido.',
            'email.unique'=>'El correo del cliente es unico.',
            'email.string'=>'Solo se permiten caracteres.',
            'email.max'=>'El maximo de caracteres del correo electronico de 255.',


            'registration_date.required'=>'La fecha de registro del cliente es requerida',
            'registration_date.min'=>'La fecha de registro del cliente debe contener al menos 6 caracteres',

        ];
    }






}
