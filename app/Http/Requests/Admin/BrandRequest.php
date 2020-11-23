<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
        $id = $this->route('brand');
        if($id != null){
            return [
                'name_ar' => 'required|max:60|unique:brands,name_ar,' . $id,
                'name_en' => 'required|max:60|unique:brands,name_en,' . $id
            ];
        } else {
            return [
                'name_ar' => 'required|max:60|unique:brands',
                'name_en' => 'required|max:60|unique:brands'
            ];
    }

    }
}
