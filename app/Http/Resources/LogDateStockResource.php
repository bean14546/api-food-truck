<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class LogDateStockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = DB::table('log_date_stocks')
        ->join('stock_dates', 'log_date_stocks.stock_date_id', '=', 'stock_dates.id')
        ->join('ingredients', 'log_date_stocks.ingredient_id', '=', 'ingredients.id')
        ->join('ingredient_units', 'ingredients.ingredient_unit_id', '=', 'ingredient_units.id')
        ->join('stocks', 'ingredients.stock_id', '=', 'stocks.id')
        ->where('log_date_stocks.id', $this->id)
        ->get();
        
        return [
            "id" => $this->id,
            "date" => collect($data)
                    ->groupBy('stock_date_id')
                    ->map(function ($query) {
                        return response()
                                ->json([
                                        "stock_date_id" => $query[0]->stock_date_id,
                                        "stock_date" => $query[0]->date,
                                    ])->original;
                            })
                            ->values()
                            ->first(),
            "ingredient" => collect($data)
                            ->groupBy('ingredient_id')
                            ->flatMap(function ($ingredient) {
                                return $ingredient->map(function ($item) {
                                    return [
                                        "ingredient_id" => $item->ingredient_id,
                                        "ingredient" => $item->ingredient,
                                        "cost" => $item->cost,
                                        "unit" => $item->unit,
                                    ];
                                });;
                            })
                            ->values()
                            ->first(),
            "log_quantity" => $this->quantity,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
