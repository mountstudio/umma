<?php

namespace App\Http\Requests;

use App\Rules\main_image;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePosterRequest extends FormRequest
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
            'main_photo' => ['nullable','image','max:2000','dimensions:min_width=500', new Main_image],
            'content' => 'required',
            'date_event' => 'required|date',
            'phone' => 'required',
            'mail' => 'required|email',
            'type_id' =>'required|numeric',
        ];
    }
}
