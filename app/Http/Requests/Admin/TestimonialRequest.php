<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'name_ar' => 'required|max:20',
            'name_en' => 'required|max:20',
            'job_ar' => 'required|max:20',
            'job_en' => 'required|max:20',
            'desc_ar' => 'required',
            'desc_en' => 'required',
            'image' => 'required|image|mimes:png,jpg,gif,jpeg|max:3072',
        ];
    }
}
