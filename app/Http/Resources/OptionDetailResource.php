<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OptionDetailResource extends JsonResource
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
            "Option_Detail_Name" => $this->Option_Detail_Name,
            "Option_Detail_Price" => $this->Option_Detail_Price,
            "isActive" => $this->isActive,
            "option" => $this->option->Option_Name,
            "option_id" => $this->option->id,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
