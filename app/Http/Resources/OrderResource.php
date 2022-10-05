<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            "Chef_Note" => $this->Chef_Note,
            "Order_Price" => $this->Order_Price,
            "Food" => $this->food, // ฟังก์ชัน
            "Option" => $this->options, // ฟังก์ชัน
            "Topping" => $this->toppings, // ฟังก์ชัน
            "Coupon" => $this->coupon, // ฟังก์ชัน
            "User" => $this->user, // ฟังก์ชัน
            "Order_Status" => $this->orderStatus // ฟังก์ชัน
        ];
    }
}