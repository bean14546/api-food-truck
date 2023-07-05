<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class OrderListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $option = DB::table('options')
            ->join('order_list_options', 'options.id', '=', 'order_list_options.option_id')
            ->join('option_details', 'option_details.id', '=', 'order_list_options.option_detail_id')
            ->where('order_list_options.order_list_id', $this->id)
            ->get();

        $topping = DB::table('toppings')
            ->join('order_list_toppings', 'toppings.id', '=', 'order_list_toppings.topping_id')
            ->where('order_list_toppings.order_list_id', $this->id)
            ->get();

        $ingredient = DB::table('ingredient_food')
            ->join('food', 'food.id', '=', 'ingredient_food.food_id')
            ->join('ingredients', 'ingredients.id', '=', 'ingredient_food.ingredient_id')
            ->join('stocks', 'stocks.id', '=', 'ingredients.stock_id')
            ->join('ingredient_groups', 'ingredient_groups.id', '=', 'ingredients.ingredient_group_id')
            ->join('ingredient_units', 'ingredient_units.id', '=', 'ingredients.ingredient_unit_id')
            ->join('order_lists', 'order_lists.food_id', '=', 'food.id')
            ->where('order_lists.id', '=', $this->id)
            ->get();
        
        return [
            "id" => $this->id,
            // "order_id" => $this->order_id,
            "order_list_status_id" => $this->orderListStatus->id,
            "Food" => $this->food, // ฟังก์ชั่น
            "Options" => collect($option)
                ->groupBy('option_id')
                ->map(function ($group) {
                    return [
                        'Option_Name' => $group[0]->Option_Name,
                        'Option_Details' => $group[0]
                    ];
                })
                ->values()
                ->all(),
            "user" => $this->user,
            "Ingredient" => collect($ingredient)
                ->groupBy('food_id')
                ->map(function ($group) {
                    return $group->map(function ($item) {
                        return [
                            "ingredient_id" => $item->ingredient_id,
                            "food_id" => $item->food_id,
                            "amount_used" => $item->amount_used,
                            "ingredient" => $item->ingredient,
                            "ingredient_group_id" => $item->ingredient_group_id,
                            "ingredientGroup" => $item->ingredientGroup,
                            "ingredient_unit_id" => $item->ingredient_unit_id,
                            "unit" => $item->unit,
                            "stock_id" => $item->stock_id,
                            "quantity" => $item->quantity,
                            "created_at" => $item->created_at,
                            "updated_at" => $item->updated_at,
                        ];
                    });
                })
                ->values()
                ->first(),
            "Topping" => $topping,
            "Note" => $this->Note,
            "Chef_Note" => $this->Chef_Note,
            "Price" => $this->Price,
            "Amount" => $this->Amount,
            "isTakeaway" => $this->isTakeaway,
            "Time" => $this->time,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
