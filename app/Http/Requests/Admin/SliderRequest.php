<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
                return [
                    'image' => 'required|image|mimes:png,jpeg,gif,jpg'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'image' => 'image|mimes:png,jpeg,gif,jpg'
                ];
        }
    }
}
