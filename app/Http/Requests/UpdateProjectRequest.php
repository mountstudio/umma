<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'name' => 'required|max:255',
            'image' => ' nullable|image|max:2000|dimensions:min_width=500',
            'description' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'image.dimensions' => 'image width must be at least 500 pixels.',
        ];
    }
}
