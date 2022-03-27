<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class GeneralRequest extends FormRequest
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
            'siteText' => 'required|max:255',
            'slogan' => 'required|max:255',
            'email' => 'required|max:100',
            'selectedWeekly' => 'required|max:10',
            'register' => 'nullable'
        ];
    }
}
