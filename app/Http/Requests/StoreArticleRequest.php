<?php

namespace App\Http\Requests;

use App\Rules\main_image;
use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'category_id' => 'required|numeric',
            'content' => 'required',
            'authors'=>'required',
            'lang'=>'required',
            'photographers'=>'nullable',
            'keywords'=>'nullable',
            'tags'=>'nullable',
            'type'=>'required',
            'logo' => ['required','image','max:10000','dimensions:min_width=500', new Main_image],
            'banner' => ['nullable','image','max:10000','dimensions:min_width=500', new Main_image],
            'og_image' => ['nullable', 'image','max:10000'],
        ];
    }
    public function messages()
    {
        return [
            'logo.dimensions' => 'Ширина превью изображения должна быть не менее 500 пикселей.',
            'banner.dimensions' => 'Ширина баннера изображения должна быть не менее 500 пикселей.',
            'og_image.dimensions' => 'Ширина open graph изображения должна быть не менее 500 пикселей.',
        ];
    }
}
