<?php

namespace App\Http\Requests;

use App\Rules\Journal_image;
use Illuminate\Foundation\Http\FormRequest;

class StoreMagazineRequest extends FormRequest
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
            'image' => ['required', 'image', 'max:2000', 'dimensions:min_width=500', new Journal_image],
            'pdf' => 'required|mimes:pdf|max:50000'
        ];
    }
}
