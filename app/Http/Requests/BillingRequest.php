<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BillingRequest extends FormRequest
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
        'issue_date'=>'required|min:6',
        'expiration_date'=>'required|min:6',
        'total_amount'=>'required|min:20|max:255',
        'payment_status'=>'required|string|min:20|max:255',
        'payment_method'=>'required|string|min:20|max:255',
        'invoice_number'=>['required','min:6',Rule::unique('billings')->ignore($this->billing)],
        'case_customer_id'=>'required',

        ];
    }


    public function messages(){

        return[
        'issue_date.required'=>'La fecha del asunto es requerida',
        'issue_date.min'=>'La fecha del asunto debe contener al menos 6 caracteres',

        'expiration_date.required'=>'La fecha de expiracion del asunto es requerida',
        'expiration_date.min'=>'La fecha de expiracion del asunto debe contener al menos 6 caracteres',

        'total_amount.required'=>'La descripcion del evento es requerido',
        'total_amount.min'=>'La descripcion del evento debe contener al menos 20 caracteres',
        'total_amount.max'=>'La descripcion del evento no puede contener mas de 255 caracteres ',

        'payment_status.required'=>'El estado de pago es requerido',
        'payment_status.string'=>'Solo se permiten caracteres',
        'payment_status.min'=>'El estado del pago debe contener al menos 20 caracteres',
        'payment_status.max'=>'El estado del pago  no puede contener mas de 255 caracteres ',

        'payment_method.required'=>'El metodo de pago es requerido',
        'payment_method.string'=>'Solo se permiten caracteres',
        'payment_method.min'=>'El metodo del pago debe contener al menos 20 caracteres',
        'payment_method.max'=>'El metodo del pago  no puede contener mas de 255 caracteres ',

        'invoice_number.required'=>'El numero de factura  es requerida',
        'invoice_number.min'=>'El numero de factura debe contener al menos 6 caracteres',

        'case_customer.required'=>'El nombre del cliente es requerido',


        ];


    }



}
