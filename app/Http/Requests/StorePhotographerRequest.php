<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePhotographerRequest extends FormRequest
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
            'full_name' => 'required|max:255',
            'photo' => 'required|image|max:2000|dimensions:ratio=1/1,min_width=500'
        ];
    }
    public function messages()
    {
        return [
            'photo.dimensions' => 'Ширина изображения должна быть не менее 500 пикселей и соотношение 1 к 1',
        ];
    }
}
