<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsFormRequest extends FormRequest
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
            'name'         => 'required|min:3|max:100|string',
            'email'        => 'required|min:3|max:100|email|unique:contacts',
            'phone'        => 'required|min:8|max:11|unique:contacts',
            'message'      => 'required|min:3|max:500',
            'archive'      => 'file|max:500|mimes:pdf,doc,docx,odt,txt|nullable',
        ];

    }
    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
        ];
        return [
            'size' => 'O arquivo anexado deve ser menor que 500kb.',
        ];

    }
}
