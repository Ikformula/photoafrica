<?php

namespace App\Http\Requests\PhotoAfrica;

use Illuminate\Foundation\Http\FormRequest;

class ContestantCreateRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|unique:contestants,email',
            'occupation' => 'required|string',
            'hobbies' => 'required',
            'country' => 'required',
            'city' => 'required',
            'photograph' => 'required|image',
            'description' => 'required'
        ];
    }
}
