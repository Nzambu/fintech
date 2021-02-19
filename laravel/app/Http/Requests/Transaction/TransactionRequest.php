<?php

namespace App\Http\Requests\Transaction;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            "type_id" => "required|integer|exists:transaction_types,tty_id",
            "method_id"=> "required|integer|exists:transaction_methods,tmt_id",
            "status_id" => "nullable|integer|exists:transaction_status,tst_id",
            "sender" => "required|integer|exists:customers,cst_id",
            "beneficiary" => "required|integer|exists:customers,cst_id",
            "amount" => "required|integer",
            "order_no" => "required|string|max:5"
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
            'type_id' => [
                'description' => 'The transaction type id is extracted from a resource in the transactions types collection. Check types under transaction'
            ],
            'method_id' => [
                'description' => 'The transaction method id is extracted from a resource in the transactions methods collection. Check methods under transaction'
            ],
            'status_id' => [
                'description' => 'The status of the transaction which is pending by default. Get the value from a resource selected from the transactions status'
            ],
            'sender' => [
                'description' => 'The id of the customer who is making a payment/sending the money. Get the value from customer selected from customer collection'
            ],
            'beneficiary' => [
                'description' => 'The id of the customer who will receive the money send in the transaction. Get the value from customer selected from customer collection'
            ],
            'amount' => [
                'description' => 'The amount involved in the transaction'
            ],
            'order_no' => [
                'description' => 'Assumes the value is from an existing order, user types the order reference'
            ],
        ];
    }
}
