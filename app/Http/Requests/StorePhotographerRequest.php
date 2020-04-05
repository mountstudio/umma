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
            'photo.dimensions' => 'image width must be at least 500 pixels and 1 to 1 ratio',
        ];
    }
}
