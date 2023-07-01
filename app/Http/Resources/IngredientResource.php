<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class IngredientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // Ingredient Groups
        $IngredientGroups = DB::table('ingredients')
                ->join('ingredient_groups', 'ingredients.ingredient_group_id', '=', 'ingredient_groups.id')
                ->where('ingredients.id', '=', $this->id)
                ->get();
                
        // Ingredient Unit
        $IngredientUnit = DB::table('ingredients')
                ->join('ingredient_units', 'ingredients.ingredient_unit_id', '=', 'ingredient_units.id')
                ->where('ingredients.id', '=', $this->id)
                ->get();
                
        // Ingredient Unit
        $Stock = DB::table('ingredients')
                ->join('stocks', 'ingredients.stock_id', '=', 'stocks.id')
                ->where('ingredients.id', '=', $this->id)
                ->get();

        return [
            "id" => $this->id,
            "ingredient" => $this->ingredient,
            "cost" => $this->cost,
            "ingredientGroup" => collect($IngredientGroups)
                            ->groupBy('ingredient_group_id')
                            ->flatMap(function ($query) {
                                return $query->map(function ($item) {
                                    return (object)[
                                        "ingredient_group_id" => $item->ingredient_group_id,
                                        "group" => $item->ingredientGroup,
                                    ];
                                });
                            })
                            ->values()
                            ->first(),
            "ingredientUnit" => collect($IngredientUnit)
                            ->groupBy('ingredient_unit_id')
                            ->flatMap(function ($query) {
                                return $query->map(function ($item) {
                                    return (object)[
                                        "ingredient_unit_id" => $item->ingredient_unit_id,
                                        "unit" => $item->unit,
                                    ];
                                });
                            })
                            ->values()
                            ->first(),
            "stock" => collect($Stock)
                            ->groupBy('stock_id')
                            ->flatMap(function ($query) {
                                return $query->map(function ($item) {
                                    return [
                                        "stock_id" => $item->stock_id,
                                        "quantity" => $item->quantity,
                                    ];
                                });
                            })
                            ->values()
                            ->first(),
            ];
    }
}
