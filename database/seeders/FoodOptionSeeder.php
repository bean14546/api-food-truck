<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodOption;

class FoodOptionSeeder extends Seeder
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
            'option_id' => '1'
        ];
        $data2 = [
            'food_id' => '1',
            'option_id' => '2'
        ];
        $data3 = [
            'food_id' => '1',
            'option_id' => '3'
        ];
        $data4 = [
            'food_id' => '2',
            'option_id' => '2'
        ];
        $data5 = [
            'food_id' => '2',
            'option_id' => '3'
        ];
        $data6 = [
            'food_id' => '3',
            'option_id' => '1'
        ];
        $data7 = [
            'food_id' => '3',
            'option_id' => '4'
        ];

        FoodOption::create($data1);
        FoodOption::create($data2);
        FoodOption::create($data3);
        FoodOption::create($data4);
        FoodOption::create($data5);
        FoodOption::create($data6);
        FoodOption::create($data7);
    }
}
