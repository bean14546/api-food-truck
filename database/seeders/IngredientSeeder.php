<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'ingredient' => 'หมูสับ',
            'cost' => '200',
            'stock_id' => '1',
            'ingredient_group_id' => '1', // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => '1' // กรัม
        ];
        $data2 = [
            'ingredient' => 'ใบกระเพรา',
            'cost' => '50',
            'stock_id' => '2',
            'ingredient_group_id' => '1', // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => '1' // กรัม
        ];
        $data3 = [
            'ingredient' => 'พริกแดงจินดา',
            'cost' => '60',
            'stock_id' => '3',
            'ingredient_group_id' => '1', // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => '1' // กรัม
        ];
        $data4 = [
            'ingredient' => 'กระเทียม',
            'cost' => '110',
            'stock_id' => '4',
            'ingredient_group_id' => '1', // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => '1' // กรัม
        ];
        $data5 = [
            'ingredient' => 'น้ำมันพืช',
            'cost' => '80',
            'stock_id' => '5',
            'ingredient_group_id' => '1', // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => '2' // มิลลิลิตร
        ];
        $data6 = [
            'ingredient' => 'น้ำมันหอย',
            'cost' => '80',
            'stock_id' => '6',
            'ingredient_group_id' => '1', // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => '2' // มิลลิลิตร
        ];
        $data7 = [
            'ingredient' => 'ซอสปรุงรส',
            'cost' => '80',
            'stock_id' => '7',
            'ingredient_group_id' => '1', // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => '2' // มิลลิลิตร
        ];
        $data8 = [
            'ingredient' => 'รสดี',
            'cost' => '30',
            'stock_id' => '8',
            'ingredient_group_id' => '1', // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => '1' // กรัม
        ];
        $data9 = [
            'ingredient' => 'น้ำเปล่า',
            'cost' => '5',
            'stock_id' => '9',
            'ingredient_group_id' => '2', // เครื่องดื่ม
            'ingredient_unit_id' => '3' // ขวด
        ];
        $data10 = [
            'ingredient' => 'น้ำอัดลม',
            'cost' => '30',
            'stock_id' => '10',
            'ingredient_group_id' => '1', // เครื่องดื่ม
            'ingredient_unit_id' => '3' // ขวด
        ];

        Ingredient::create($data1);
        Ingredient::create($data2);
        Ingredient::create($data3);
        Ingredient::create($data4);
        Ingredient::create($data5);
        Ingredient::create($data6);
        Ingredient::create($data7);
        Ingredient::create($data8);
        Ingredient::create($data9);
        Ingredient::create($data10);
    }
}
