<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome_progetto'=>'required|unique:projects|max:150|min:4',
            'cover_image'=>'nullable|image|max: 250'
        ];
    }
    public function messages(){
        return [
           ' nome_progetto.required'=>'il nome del progetto è obbligatorio.',
           ' nome_progetto.min'=>'il nome del progetto deve essere lungo almeno :min caratteri.',
           ' nome_progetto.max'=>'il nome del progetto deve essere lungo almeno :max caratteri.'
        ];
    }
}
