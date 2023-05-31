<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'thumb' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il titolo è obbligatorio",
            'title.max' => "Il tittolo non deve superare 255 caratteri",
            'title.min' => "Il titolo deve contenere almano 3 caratteri",
            'thumb.required' => "Devi inserire la url di una immagine",
            'thumb.max' => "La url dell'immagine deve essere di massimo 255 caratteri",
        ];
    }
}
