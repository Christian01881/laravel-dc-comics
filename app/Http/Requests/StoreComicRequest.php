<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:100|min:3',
            'thumb' => 'required',
            'description' => 'required|min:3',
            'price' => 'required|min:3',
            'series' => 'required|max:255|min:3',
            'sale_date' => 'required',
            'type' => 'required|min:3',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il titolo è obbligatorio",
            'title.max' => "Il tittolo non deve superare 100 caratteri",
            'title.min' => "Il titolo deve contenere almano 3 caratteri",
            'thumb.required' => "Devi inserire la url di una immagine",
            'description.required' => "lobbligatorio",
            'description.min' => "a descrizione deve avere minimo 3 caratteri",
            'price.required' => "obbligatorio",
            'price.min' => "inserire un numero con almeno 2 cifre dopo il punto",
            'series.required' => "obbligatorio",
            'series.min' => "Deve essere composto da almeno 3 caratteri",
            'series.max' => "Deve essere composto da non più di 255 caratteri",
            'sale_date.required' => "inerire una data",
            'type.required' => "obbligatorio",
            'type.min' => "Deve contenere almeno 3 caratteri"
        ];
    }
}
