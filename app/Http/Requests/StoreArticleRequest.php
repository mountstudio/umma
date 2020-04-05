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
            'photographers'=>'nullable',
            'tags'=>'nullable',
            'type'=>'required',
            'logo' => ['required','image','max:2000','dimensions:min_width=500', new Main_image],
        ];
    }
    public function messages()
    {
        return [
            'logo.dimensions' => 'image width must be at least 500 pixels.',
        ];
    }
}
