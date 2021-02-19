<?php

namespace App\Http\Resources\Customer;

use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Currency\CurrencyResource;

class CustomerResource extends JsonResource
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
            "type" => "customer",
            "id" => (string) $this->cst_id,
            "attributes" => [
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
                "amount_paid" => $this->amount_paid($this->cst_id)
            ],
            "relationships" => [
                "user" => [
                    new UserResource($this->user)
                ],
                "status" => [
                    new CustomerStatusResource($this->status)
                ],
                "currency" => [
                    new CurrencyResource($this->currency)
                ],
                "group" => [
                    new CustomerGroupResource($this->group)
                ],
            ],
            "links" => [
                "self" => url('api/customer/'.$this->cst_id)
            ]
        ];
    }
}
