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
            'food_id' => 1,
            'topping_id' => 1
        ];
        $data2 = [
            'food_id' => 1,
            'topping_id' => 2
        ];
        $data3 = [
            'food_id' => 2,
            'topping_id' => 1
        ];
        $data4 = [
            'food_id' => 2,
            'topping_id' => 2
        ];
        $data5 = [
            'food_id' => 3,
            'topping_id' => 2
        ];
        $data6 = [
            'food_id' => 3,
            'topping_id' => 3
        ];
        $data7 = [
            'food_id' => 3,
            'topping_id' => 4
        ];
        $data8 = [
            'food_id' => 4,
            'topping_id' => 9
        ];
        $data9 = [
            'food_id' => 4,
            'topping_id' => 10
        ];
        $data10 = [
            'food_id' => 5,
            'topping_id' => 3
        ];
        $data11 = [
            'food_id' => 6,
            'topping_id' => 1
        ];
        $data12 = [
            'food_id' => 6,
            'topping_id' => 2
        ];
        $data13 = [
            'food_id' => 7,
            'topping_id' => 7
        ];
        $data14 = [
            'food_id' => 7,
            'topping_id' => 8
        ];
        $data15 = [
            'food_id' => 8,
            'topping_id' => 7
        ];
        $data16 = [
            'food_id' => 8,
            'topping_id' => 8
        ];
        $data17 = [
            'food_id' => 9,
            'topping_id' => 7
        ];
        $data18 = [
            'food_id' => 9,
            'topping_id' => 8
        ];
        $data19 = [
            'food_id' => 10,
            'topping_id' => 7
        ];
        $data20 = [
            'food_id' => 10,
            'topping_id' => 8
        ];
        $data21 = [
            'food_id' => 15,
            'topping_id' => 4
        ];
        $data22 = [
            'food_id' => 15,
            'topping_id' => 5
        ];
        $data23 = [
            'food_id' => 15,
            'topping_id' => 8
        ];
        $data24 = [
            'food_id' => 16,
            'topping_id' => 4
        ];
        $data25 = [
            'food_id' => 16,
            'topping_id' => 5
        ];
        $data26 = [
            'food_id' => 16,
            'topping_id' => 8
        ];

        FoodTopping::create($data1);
        FoodTopping::create($data2);
        FoodTopping::create($data3);
        FoodTopping::create($data4);
        FoodTopping::create($data5);
        FoodTopping::create($data6);
        FoodTopping::create($data7);
        FoodTopping::create($data8);
        FoodTopping::create($data9);
        FoodTopping::create($data10);
        FoodTopping::create($data11);
        FoodTopping::create($data12);
        FoodTopping::create($data13);
        FoodTopping::create($data14);
        FoodTopping::create($data15);
        FoodTopping::create($data16);
        FoodTopping::create($data17);
        FoodTopping::create($data18);
        FoodTopping::create($data19);
        FoodTopping::create($data20);
        FoodTopping::create($data21);
        FoodTopping::create($data22);
        FoodTopping::create($data23);
        FoodTopping::create($data24);
        FoodTopping::create($data25);
        FoodTopping::create($data26);
    }
}
