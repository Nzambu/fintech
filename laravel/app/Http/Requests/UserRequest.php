<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            "first_name" => "required|string|max:30",
            "last_name" => "required|string|max:30",
            "id_number" => "required|integer|unique",
            "system_user" => "nullable|bool",
            "gender_id" => "required|integer|exists:genders,gnd_id"
        ];
    }
}
