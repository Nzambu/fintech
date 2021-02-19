<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            "id_number" => "required|integer|unique:users,id_number".$this->user->id,
            "system_user" => "nullable|bool",
            "gender_id" => "required|integer|exists:gender,gnd_id",            
            "status_id" => "nullable|integer|exists:customer_status,cst_id",
            "group_id" => "required|integer|exists:customer_groups,cgr_id"
        ];
    }

    /**
     * Documentation
     * 
     * @return array
     */
    public function bodyParameters()
    {
        return [
            'first_name' => [
                'description' => 'The baptismal or first name of the customer'
            ],
            'last_name' => [
                'description' => 'The family name of the customer'
            ],
            'id_number' => [
                'description' => 'A unique identification number from a government issued identification number'
            ],
            'system_user' => [
                'description' => 'A user can log in or not based on this flag which is false by default'
            ],
            'gender_id' => [
                'description' => 'The gender id selected from gender resource. The resource is available under user get gender documentation'
            ],
            'status_id' => [
                'description' => 'The status id of the customer selected from customer status resource. More information is provided under customer status'
            ],
            'group_id' => [
                'description' => 'The group id of the customer selected from customer group resource. More information is provided under customer groups'
            ],
        ];
    }
}
