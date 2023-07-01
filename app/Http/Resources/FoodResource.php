<?php

namespace App\Http\Resources;

use App\Models\Ingredient;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use stdClass;

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
        $data = DB::table('options')
                ->join('food_options', 'options.id', '=', 'food_options.option_id')
                ->join('option_details', 'options.id', '=', 'option_details.option_id')
                ->where('food_options.food_id', '=', $this->id)
                ->get();

        $data1 = DB::table('food_toppings')
                ->join('toppings', 'toppings.id', '=', 'food_toppings.topping_id')
                ->join('food', 'food.id', '=', 'food_toppings.food_id')
                ->where('food_toppings.food_id', '=', $this->id)
                ->get();

        $data2 = DB::table('ingredient_food')
                ->join('food', 'food.id', '=', 'ingredient_food.food_id')
                ->join('ingredients', 'ingredients.id', '=', 'ingredient_food.ingredient_id')
                ->join('stocks', 'stocks.id', '=', 'ingredients.stock_id')
                ->join('ingredient_groups', 'ingredient_groups.id', '=', 'ingredients.ingredient_group_id')
                ->join('ingredient_units', 'ingredient_units.id', '=', 'ingredients.ingredient_unit_id')
                ->where('food.id', '=', $this->id)
                ->get();

        return [
            "id" => $this->id,
            "Food_Name" => $this->Food_Name,
            "Food_Price" => $this->Food_Price,
            "Food_Description" => $this->Food_Description,
            "Food_Image" => $this->Food_Image,
            "Category" => $this->category,
            "is_recommend" => $this->is_recommend,
            "is_new" => $this->is_new,
            "is_active" => $this->is_active,
            "Option" => collect($data)
                            ->groupBy('option_id')
                            ->map(function ($group) {
                                return [
                                    'id' => $group[0]->option_id,
                                    'Option_Name' => $group[0]->Option_Name,
                                    'option_details' => $group
                                ];
                            })
                            ->values()
                            ->all(),
            "Topping" => collect($data1)
                            ->groupBy('food_id')
                            ->flatMap(function ($group) {
                                return $group->map(function ($item) {
                                    return [
                                        "id" => $item->topping_id,
                                        "Topping_Name" => $item->Topping_Name,
                                        "Topping_Price" => $item->Topping_Price,
                                        "isActive" => $item->isActive,
                                        "created_at" => $item->created_at,
                                        "updated_at" => $item->updated_at
                                    ];
                                });
                            })
                            ->values()
                            ->all(),
            "Ingredient" => collect($data2)
                            ->groupBy('food_id')
                            ->flatMap(function ($group) {
                                return $group;
                            })
                            ->values()
                            ->all(),
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
