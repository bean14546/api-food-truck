<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class CategoryResource extends JsonResource
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
            "Category_Name" => $this->Category_Name,
            "Category_Description" => $this->Category_Description,
            "Category_Image" => $this->Category_Image,
            "Food" => $this->food, // ฟังก์ชัน
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
