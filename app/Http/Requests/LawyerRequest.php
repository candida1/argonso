<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LawyerRequest extends FormRequest
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
            'name'=>'required|string|max:255.',
            'lastname'=>'required|string|max:255',
            'gender'=>'required',
            'identity_card'=>['nullable','string','min:16','max:20',Rule::unique('lawyers')->ignore($this->lawyers)],
            'telephone'=>'nullable|string|min:8',
            'address'=>'required|string|max:255',
            'email'=>['required','string','max:255',Rule::unique('lawyers')->ignore($this->lawyers)],

        ];
    }


    public function messages(){
        return[
            'name.required'=>'El nombre del abogado es requerido',
            'name.string'=>'Solo se permiten caracteres',
            'name.min'=>'El nombre debe contener al menos 20 caracteres',
            'name.max'=>'El nombre no puede contener mas de 255 caracteres',

            'lastname.required'=>'El apellido del abogado es requerido',
            'lastname.string'=>'Solo se permiten caracteres',
            'lastname.min'=>'El apellido debe contener al menos 20 caracteres',
            'lastname.max'=>'El apellido no puede contener mas de 255 caracteres',

            'gender.required'=>'El genero del abogado es requerida',

            'identity_card.string'=>'La identificación del abogado solo se permiten caracteres',
            'identity_card.unique'=>'La identificacion del abogado es unica',
            'identity_card.min'=>'La identificación del abogado tiene un minimo de 16 caracteres',
            'identity_card.max'=>'La identificación del abogado tienen un maximo de 20 caracteres',


            'telephone.required'=>'El número de telefono es requerido',
            'telephone.string'=>'El número de telefono del abogado solo permite caracteres',
            'telephone.min'=>'El minimo de caracteres del telefono necesarios es de 15',


            'address.required'=>'La direccion del abogado es requerida.',
            'address.string'=>'Solo se permiten caracteres.',
            'address.min'=>'El minimo de caracteres de la dirección es de 100.',
            'address.max'=>'El maximo de caracteres de la dirección de 255.',


            'email.required'=>'El correo electronico del abogado es requerido.',
            'email.unique'=>'El correo del abogado es unico.',
            'email.string'=>'Solo se permiten caracteres.',
            'email.max'=>'El maximo de caracteres del correo electronico de 255.',



        ];
    }




}
