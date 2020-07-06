<?php

namespace App\Http\Requests;

use App\Rules\Journal_image;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMagazineRequest extends FormRequest
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
            'image' => ['nullable', 'image', 'max:2000', 'dimensions:min_width=500', new Journal_image],
            'pdf' => 'nullable|mimes:pdf|max:50000',
            'kg_pdf' => 'nullable|mimes:pdf|max:50000',
            'status' => 'nullable|max:255',
        ];
    }
    public function messages()
    {
        return [
            'image.dimensions' => 'Ширина изображения должна быть не менее 500 пикселей',
        ];
    }
}
