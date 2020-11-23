<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class SettingRequest extends FormRequest
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

    public function rules()
    {
        return [
            'years_of_experience' => 'required|max:60',
            'repaired_cars' => 'required|max:60',
            'workers' => 'required|max:60',
            'address' => 'required|max:60',
            'work_times' => 'required|max:60',
            'email' => 'required|email',
            'phone' => 'required|digits_between:10,12',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
        ];

    }
}
