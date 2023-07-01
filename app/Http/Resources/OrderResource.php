<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

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
        // เลือกทุกอัน
        $data1 = DB::table('orders')
        ->join('order_lists', 'orders.id', '=', 'order_lists.order_id')
        ->join('food', 'order_lists.food_id', '=', 'food.id')
        ->join('order_list_options', 'order_lists.id', '=', 'order_list_options.order_list_id')
        ->join('options', 'order_list_options.option_id', '=', 'options.id')
        ->join('option_details', 'order_list_options.option_detail_id', '=', 'option_details.id')
        ->join('order_list_toppings', 'order_lists.id', '=', 'order_list_toppings.order_list_id')
        ->join('toppings', 'order_list_toppings.topping_id', '=', 'toppings.id')
        ->where('order_id', $this->id)
        ->get();

        // เลือก option ไม่เลือก topping
        $data2 = DB::table('orders')
        ->join('order_lists', 'orders.id', '=', 'order_lists.order_id')
        ->join('food', 'order_lists.food_id', '=', 'food.id')
        ->join('order_list_options', 'order_lists.id', '=', 'order_list_options.order_list_id')
        ->join('options', 'order_list_options.option_id', '=', 'options.id')
        ->join('option_details', 'order_list_options.option_detail_id', '=', 'option_details.id')
        ->where('order_id', $this->id)
        ->get();

        // เลือก topping ไม่เลือก option
        $data3 = DB::table('orders')
        ->join('order_lists', 'orders.id', '=', 'order_lists.order_id')
        ->join('food', 'order_lists.food_id', '=', 'food.id')
        ->join('order_list_toppings', 'order_lists.id', '=', 'order_list_toppings.order_list_id')
        ->join('toppings', 'order_list_toppings.topping_id', '=', 'toppings.id')
        ->where('order_id', $this->id)
        ->get();

        // dd($data2);
        if (count($data3) > 0) {
            return [
                "id" => $this->id,
                "order_status_id" => $this->orderStatus->id, // ฟังก์ชัน
                "isTakeaway" => $this->isTakeaway,
                "user_id" => $this->user,
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
                "Order_List" => collect($data3)
                                ->groupBy('order_list_id')
                                ->map(function ($query) {
                                    return [
                                        "order_list_id" => response()
                                                ->json(
                                                    collect($query)
                                                    ->groupBy('order_list_id')
                                                    ->map(function ($groupFood) {
                                                        return $groupFood[0]->order_list_id;
                                                    })
                                                    ->values()
                                                    ->all()
                                                )->original[0],
                                        "order_list_status_id" => response()
                                                ->json(
                                                    collect($query)
                                                    ->groupBy('order_list_id')
                                                    ->map(function ($groupFood) {
                                                        return $groupFood[0]->order_list_status_id;
                                                    })
                                                    ->values()
                                                    ->all()
                                                )->original[0],
                                        "Food" => response()
                                                ->json(
                                                    collect($query)
                                                    ->groupBy('food_id')
                                                    ->map(function ($groupFood) {
                                                        return response()
                                                                ->json([
                                                                    'order_id' => $groupFood[0]->order_id,
                                                                    'food_id' => $groupFood[0]->food_id,
                                                                    'Food_Name' => $groupFood[0]->Food_Name,
                                                                    'Food_Price' => $groupFood[0]->Food_Price,
                                                                    'Food_Description' => $groupFood[0]->Food_Description,
                                                                    'Food_Image' => $groupFood[0]->Food_Image,
                                                                    'created_at' => $groupFood[0]->created_at,
                                                                    'updated_at' => $groupFood[0]->updated_at
                                                                ])->original;
                                                    })
                                                    ->values()
                                                    ->all()
                                                )->original[0],
                                        "Topping" => collect($query)
                                                    ->groupBy('topping_id')
                                                    ->map(function ($groupTopping) {
                                                        return [
                                                            'order_id' => $groupTopping[0]->order_id,
                                                            'order_list_id' => $groupTopping[0]->order_list_id,
                                                            'topping_id' => $groupTopping[0]->topping_id,
                                                            'Topping_Name' => $groupTopping[0]->Topping_Name,
                                                            'Topping_Price' => $groupTopping[0]->Topping_Price,
                                                            'isActive' => $groupTopping[0]->isActive,
                                                            'created_at' => $groupTopping[0]->created_at,
                                                            'updated_at' => $groupTopping[0]->updated_at,
                                                            'isActive' => $groupTopping[0]->isActive
                                                        ];
                                                    })
                                                    ->values()
                                                    ->all(),
                                        "Price" => $query[0]->Price,
                                        "Amount" => $query[0]->Amount,
                                        "Note" => $query[0]->Note
                                    ];
                                })
                                ->values()
                                ->all(),
            ];
        } elseif (count($data2) > 0) {
            return [
                "id" => $this->id,
                "order_status_id" => $this->orderStatus->id, // ฟังก์ชัน
                "isTakeaway" => $this->isTakeaway,
                "user_id" => $this->user,
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
                "Order_List" => collect($data2)
                                ->groupBy('order_list_id')
                                ->map(function ($query) {
                                    return [
                                        "order_list_id" => response()
                                                ->json(
                                                    collect($query)
                                                    ->groupBy('order_list_id')
                                                    ->map(function ($groupFood) {
                                                        return $groupFood[0]->order_list_id;
                                                    })
                                                    ->values()
                                                    ->all()
                                                )->original[0],
                                        "order_list_status_id" => response()
                                                ->json(
                                                    collect($query)
                                                    ->groupBy('order_list_id')
                                                    ->map(function ($groupFood) {
                                                        return $groupFood[0]->order_list_status_id;
                                                    })
                                                    ->values()
                                                    ->all()
                                                )->original[0],
                                        "Food" => response()
                                                ->json(
                                                    collect($query)
                                                    ->groupBy('food_id')
                                                    ->map(function ($groupFood) {
                                                        return response()
                                                                ->json([
                                                                    'order_id' => $groupFood[0]->order_id,
                                                                    'food_id' => $groupFood[0]->food_id,
                                                                    'Food_Name' => $groupFood[0]->Food_Name,
                                                                    'Food_Price' => $groupFood[0]->Food_Price,
                                                                    'Food_Description' => $groupFood[0]->Food_Description,
                                                                    'Food_Image' => $groupFood[0]->Food_Image,
                                                                    'created_at' => $groupFood[0]->created_at,
                                                                    'updated_at' => $groupFood[0]->updated_at
                                                                ])->original;
                                                    })
                                                    ->values()
                                                    ->all()
                                                )->original[0],
                                        "Options" => collect($query)
                                                    ->groupBy('option_id')
                                                    ->map(function ($groupOption) {
                                                        return [
                                                            'Option_Name' => $groupOption[0]->Option_Name,
                                                            'Option_Details' => [
                                                                'order_id' => $groupOption[0]->order_id,
                                                                'order_list_id' => $groupOption[0]->order_list_id,
                                                                'option_id' => $groupOption[0]->option_id,
                                                                'Option_Name' => $groupOption[0]->Option_Name,
                                                                'option_detail_id' => $groupOption[0]->option_detail_id,
                                                                'Option_Detail_Name' => $groupOption[0]->Option_Detail_Name,
                                                                'Option_Detail_Price' => $groupOption[0]->Option_Detail_Price,
                                                                'isActive' => $groupOption[0]->isActive,
                                                            ],
                                                        ];
                                                    })
                                                    ->values()
                                                    ->all(),
                                        "Price" => $query[0]->Price,
                                        "Amount" => $query[0]->Amount,
                                        "Note" => $query[0]->Note
                                    ];
                                })
                                ->values()
                                ->all(),
            ];
        } elseif (count($data1) > 0) {
            return [
                "id" => $this->id,
                "order_status_id" => $this->orderStatus->id, // ฟังก์ชัน
                "isTakeaway" => $this->isTakeaway,
                "user_id" => $this->user,
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
                "Order_List" => collect($data1)
                                ->groupBy('order_list_id')
                                ->map(function ($query) {
                                    return [
                                        "order_list_id" => response()
                                                ->json(
                                                    collect($query)
                                                    ->groupBy('order_list_id')
                                                    ->map(function ($groupFood) {
                                                        return $groupFood[0]->order_list_id;
                                                    })
                                                    ->values()
                                                    ->all()
                                                )->original[0],
                                        "order_list_status_id" => response()
                                                ->json(
                                                    collect($query)
                                                    ->groupBy('order_list_id')
                                                    ->map(function ($groupFood) {
                                                        return $groupFood[0]->order_list_status_id;
                                                    })
                                                    ->values()
                                                    ->all()
                                                )->original[0],
                                        "Food" => response()
                                                ->json(
                                                    collect($query)
                                                    ->groupBy('food_id')
                                                    ->map(function ($groupFood) {
                                                        return response()
                                                                ->json([
                                                                    'order_id' => $groupFood[0]->order_id,
                                                                    'food_id' => $groupFood[0]->food_id,
                                                                    'Food_Name' => $groupFood[0]->Food_Name,
                                                                    'Food_Price' => $groupFood[0]->Food_Price,
                                                                    'Food_Description' => $groupFood[0]->Food_Description,
                                                                    'Food_Image' => $groupFood[0]->Food_Image,
                                                                    'created_at' => $groupFood[0]->created_at,
                                                                    'updated_at' => $groupFood[0]->updated_at
                                                                ])->original;
                                                    })
                                                    ->values()
                                                    ->all()
                                                )->original[0],
                                        "Options" => collect($query)
                                                    ->groupBy('option_id')
                                                    ->map(function ($groupOption) {
                                                        return [
                                                            'Option_Name' => $groupOption[0]->Option_Name,
                                                            'Option_Details' => [
                                                                'order_id' => $groupOption[0]->order_id,
                                                                'order_list_id' => $groupOption[0]->order_list_id,
                                                                'option_id' => $groupOption[0]->option_id,
                                                                'Option_Name' => $groupOption[0]->Option_Name,
                                                                'option_detail_id' => $groupOption[0]->option_detail_id,
                                                                'Option_Detail_Name' => $groupOption[0]->Option_Detail_Name,
                                                                'Option_Detail_Price' => $groupOption[0]->Option_Detail_Price,
                                                                'isActive' => $groupOption[0]->isActive,
                                                            ],
                                                        ];
                                                    })
                                                    ->values()
                                                    ->all(),
                                        "Topping" => collect($query)
                                                    ->groupBy('topping_id')
                                                    ->map(function ($groupTopping) {
                                                        return [
                                                            'order_id' => $groupTopping[0]->order_id,
                                                            'order_list_id' => $groupTopping[0]->order_list_id,
                                                            'topping_id' => $groupTopping[0]->topping_id,
                                                            'Topping_Name' => $groupTopping[0]->Topping_Name,
                                                            'Topping_Price' => $groupTopping[0]->Topping_Price,
                                                            'isActive' => $groupTopping[0]->isActive,
                                                            'created_at' => $groupTopping[0]->created_at,
                                                            'updated_at' => $groupTopping[0]->updated_at,
                                                            'isActive' => $groupTopping[0]->isActive
                                                        ];
                                                    })
                                                    ->values()
                                                    ->all(),
                                        "Price" => $query[0]->Price,
                                        "Amount" => $query[0]->Amount,
                                        "Note" => $query[0]->Note
                                    ];
                                })
                                ->values()
                                ->all(),
            ];
        } else {
            return "There is an error on the database side.";
        }
    }
}
