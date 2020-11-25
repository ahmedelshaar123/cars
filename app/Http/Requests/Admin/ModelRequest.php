<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ModelRequest extends FormRequest
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
        $id = $this->route('model');
        if ($id != null) {
            return [
                'name' => 'required|max:60|unique:models,name,' . $id,
                'brand_id' => 'required|exists:brands,id'
            ];
        } else {
            return [
                'name' => 'required|max:60|unique:models,name',
                'brand_id' => 'required|exists:brands,id'
            ];
        }
    }
}
