<?php

namespace App\Http\Requests;

use App\Rules\main_image;
use Illuminate\Foundation\Http\FormRequest;

class StoreMultimediaRequest extends FormRequest
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
            'title' => 'required|max:255',
            'url_photo' => ['required', 'image', 'max:2000', 'dimensions:min_width=500', new Main_image],
            'url_video' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'url_photo.dimensions' => 'Ширина изображения должна быть не менее 500 пикселей',
        ];
    }
}
