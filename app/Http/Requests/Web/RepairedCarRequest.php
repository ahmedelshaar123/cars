<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class RepairedCarRequest extends FormRequest
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
            'name' => 'required|max:20',
            'email' => 'required|email',
            'phone' => 'required|digits_between:10,12',
            'year' => 'required|digits:4',
            'modell_id' => 'required|exists:models,id',
            'service_id' => 'required|exists:services,id',
        ];
    }
}
