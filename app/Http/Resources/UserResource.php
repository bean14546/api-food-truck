<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "username" => $this->username,
            // "User_Last_Name" => $this->User_Last_Name,
            // "User_Avatar" => $this->User_Avatar,
            // "User_Point" => $this->User_Point,
            // "email" => $this->email,
            // "Phone_Number" => $this->phoneNumbers, // ฟังก์ชัน
            // "Coupon" => $this->coupons, // ฟังก์ชัน
            // "Order" => $this->order, // ฟังก์ชัน
        ];
    }
}
