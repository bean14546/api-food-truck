<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderList;

class OrderListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'Amount' => '',
            'Price' => '',
            'Note' => '',
            'order_id' => '',
            'food_id' => '',
            'option_id' => '',
            'topping_id' => ''
        ];
        $data2 = [
            'Amount' => '',
            'Price' => '',
            'Note' => '',
            'order_id' => '',
            'food_id' => '',
            'option_id' => '',
            'topping_id' => ''
        ];
        $data3 = [
            'Amount' => '',
            'Price' => '',
            'Note' => '',
            'order_id' => '',
            'food_id' => '',
            'option_id' => '',
            'topping_id' => ''
        ];
        $data4 = [
            'Amount' => '',
            'Price' => '',
            'Note' => '',
            'order_id' => '',
            'food_id' => '',
            'option_id' => '',
            'topping_id' => ''
        ];

        OrderList::create($data1);
        OrderList::create($data2);
        OrderList::create($data3);
        OrderList::create($data4);
    }
}
