<?php

namespace App\Http\Requests;

use App\Rules\main_image;
use Illuminate\Foundation\Http\FormRequest;

class StorePosterRequest extends FormRequest
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
            'main_photo' => ['required', 'image', 'max:2000', 'dimensions:min_width=500', new Main_image],
            'content' => 'required',
            'phone' => 'required',
            'mail' => 'required|email',
            'date_event' => 'required|date',
                'type_id' =>'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'main_photo.dimensions' => 'image width must be at least 500 pixels.',
        ];
    }
}
