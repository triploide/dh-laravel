<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title'=> 'required|max:255',
            'rating'=> 'required|numeric',
            'awards'=> 'required|integer',
            'length'=> 'required|integer',
            'release_date'=> 'required|date',
            'poster' => 'image'
        ];
    }
}
