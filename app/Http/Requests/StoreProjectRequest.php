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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'image' => ' required|image|max:2000|dimensions:min_width=500',
            'description' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'image.dimensions' => 'Ширина изображения должна быть не менее 500 пикселей.',
        ];
    }
}
