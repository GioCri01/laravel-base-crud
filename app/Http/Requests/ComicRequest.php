<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            "title"=> "required|max:50|min:5",
            "image"=> "required|max:255|min:10",
            "type"=> "required|max:50|min:3"
        ];
    }

    public function messages()
    {
        return [
            "title.required"=> "il titolo è obbligatorio",
            "title.max"=> "il titolo non può  contenere più di :max caratteri",
            "title.min"=> "il titolo deve avere almeno :min caratteri",
            "image.required"=> "L'immagine è obbligatoria",
            "image.max"=> "il'immagine non può  contenere più di :max caratteri",
            "image.min"=> "il'immagine non può  contenere meno di :min caratteri",
            "type.required"=> "il tipo è obbligatorio",
            "type.max"=> "il type non può  contenere più di :max caratteri",
            "type.min"=> "il type deve avere almeno :min caratteri"
        ];
    }
}
