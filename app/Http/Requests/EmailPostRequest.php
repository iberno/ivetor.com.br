<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=> 'required|unique:emails|max:255',
        ];
    }

        /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Insira seu Email para receber futuras Promoções!',
            'email.unique' => 'O :attribute já está cadastrado!',
        ];
    }
}
