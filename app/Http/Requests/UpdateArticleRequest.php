<?php

namespace App\Http\Requests;

use App\Rules\main_image;
use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'logo' => ['nullable','image','max:10000','dimensions:min_width=500', new Main_image],
            'banner' => ['nullable','image','max:10000','dimensions:min_width=500', new Main_image],
            'og_image' => ['nullable','image','max:10000'],
        ];
    }
    public function messages()
    {
        return [
            'logo.dimensions' => 'image width must be at least 500 pixels.',
            'banner.dimensions' => 'image width must be at least 500 pixels.',
            'og_image.dimensions' => 'image width must be at least 500 pixels.',
        ];
    }
}
