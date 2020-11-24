<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
                    'name_ar' => 'required|max:60',
                    'name_en' => 'required|max:60',
                    'desc_ar' => 'required',
                    'desc_en' => 'required',
                    'features_ar' => 'required',
                    'features_en' => 'required',
                    'image' => 'required|array',
                    'image.*' => 'image|mimes:jpg,jpeg,png,gif|max:3072'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'name_ar' => 'required|max:60',
                    'name_en' => 'required|max:60',
                    'desc_ar' => 'required',
                    'desc_en' => 'required',
                    'features_ar' => 'required',
                    'features_en' => 'required',
                    'image' => 'array',
                    'image.*' => 'image|mimes:jpg,jpeg,png,gif|max:3072'
                ];
        }
    }
}
