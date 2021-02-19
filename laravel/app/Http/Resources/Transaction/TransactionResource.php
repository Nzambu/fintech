<?php

namespace App\Http\Resources\Transaction;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Customer\CustomerResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "type" => "transaction",
            "id" => (string) $this->trn_id,
            "attributes" => [
                "amount" => $this->amount,
                "ref_no" => $this->ref_no,
                "order_no" => $this->order_no,
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
            ],
            "relationships" => [
                "sender" => [
                    new CustomerResource($this->from_sender)
                ],
                "beneficiary" => [
                    new CustomerResource($this->to_beneficiary)
                ],
                "type" => [
                    new TransactionTypeResource($this->type)
                ],
                "method" => [
                    new TransactionMethodResource($this->method)
                ],
                "status" => [
                    new TransactionStatusResource($this->status)
                ],
            ],
            "links" => [
                "self" => url('api/transaction/'.$this->trn_id)
            ]
        ];
    }
}
