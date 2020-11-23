<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class YearRequest extends FormRequest
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
        $id = $this->route('year');
        if ($id != null) {
            return [
                'year' => 'required|digits:4|unique:years,year,' . $id

            ];
        } else {
            return [
                'year' => 'required|digits:4|unique:years'
            ];
        }
    }
}
