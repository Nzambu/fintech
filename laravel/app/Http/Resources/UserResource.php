<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            "type" => "user",
            "id" => (string) $this->usr_id,
            "attributes" => [
                "name" => $this->first_name." ".$this->last_name,
                "firstName" => $this->first_name,
                "lastName" => $this->last_name,
                "id_number" => $this->id_number,                
            ],
            'relationships' => [
                'gender' => [
                    new GenderResource($this->gender)
                ],
                'primary_phone' => [
                    new PhoneResource($this->primary_phone($this->usr_id))
                ],
                'primary_email' => [
                    new EmailResource($this->primary_email($this->usr_id))
                ],
                'email' => [
                    EmailResource::collection($this->emails)
                ],
                'phone' => [
                    PhoneResource::collection($this->phone)
                ],
                'password' => [
                    new PasswordResource($this->password($this->usr_id))
                ],                
            ],
            "links" => [
                "self" => $request->fullUrl()
            ]
        ];
    }
}
