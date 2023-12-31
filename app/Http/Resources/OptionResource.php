<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OptionResource extends JsonResource
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
            "Option_Name" => $this->Option_Name,
            "Option_Detail" => $this->optionDetails, // ฟังก์ชันม
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
