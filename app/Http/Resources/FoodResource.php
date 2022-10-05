<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
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
            "Food_Name" => $this->Food_Name,
            "Food_Price" => $this->Food_Price,
            "Food_Description" => $this->Food_Description,
            "Food_Image" => $this->Food_Image,
            "Food_Status" => $this->foodStatus, // ฟังก์ชัน
            "Option" => $this->options // ฟังก์ชัน
        ];
    }
}
