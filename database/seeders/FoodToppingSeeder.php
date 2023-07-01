<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodTopping;

class FoodToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'food_id' => '1',
            'topping_id' => '1'
        ];
        $data2 = [
            'food_id' => '1',
            'topping_id' => '2'
        ];
        $data3 = [
            'food_id' => '1',
            'topping_id' => '3'
        ];
        $data4 = [
            'food_id' => '2',
            'topping_id' => '2'
        ];
        $data5 = [
            'food_id' => '2',
            'topping_id' => '3'
        ];
        $data6 = [
            'food_id' => '3',
            'topping_id' => '1'
        ];
        $data7 = [
            'food_id' => '3',
            'topping_id' => '4'
        ];

        FoodTopping::create($data1);
        FoodTopping::create($data2);
        FoodTopping::create($data3);
        FoodTopping::create($data4);
        FoodTopping::create($data5);
        FoodTopping::create($data6);
        FoodTopping::create($data7);
    }
}
