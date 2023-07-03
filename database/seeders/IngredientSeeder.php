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
            'cost' => 0.18,
            'stock_id' => 1,
            'ingredient_group_id' => 1, // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => 1 // กรัม
        ];
        $data2 = [
            'ingredient' => 'ใบกระเพรา',
            'cost' => 0.05,
            'stock_id' => 2,
            'ingredient_group_id' => 1, // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => 1 // กรัม
        ];
        $data3 = [
            'ingredient' => 'พริกแดงจินดา',
            'cost' => 0.07,
            'stock_id' => 3,
            'ingredient_group_id' => 1, // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => 1 // กรัม
        ];
        $data4 = [
            'ingredient' => 'กระเทียม',
            'cost' => 0.047,
            'stock_id' => 4,
            'ingredient_group_id' => 1, // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => 1 // กรัม
        ];
        $data5 = [
            'ingredient' => 'น้ำมันพืช',
            'cost' => 0.08,
            'stock_id' => 5,
            'ingredient_group_id' => 1, // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => 2 // มิลลิลิตร
        ];
        $data6 = [
            'ingredient' => 'น้ำมันหอย',
            'cost' => 0.06,
            'stock_id' => 6,
            'ingredient_group_id' => 1, // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => 2 // มิลลิลิตร
        ];
        $data7 = [
            'ingredient' => 'ซอสปรุงรส',
            'cost' => 0.04,
            'stock_id' => 7,
            'ingredient_group_id' => 1, // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => 2 // มิลลิลิตร
        ];
        $data8 = [
            'ingredient' => 'รสดี',
            'cost' => 0.02,
            'stock_id' => 8,
            'ingredient_group_id' => 1, // วัตถุดิบสำหรับทำอาหาร
            'ingredient_unit_id' => 1 // กรัม
        ];
        $data9 = [
            'ingredient' => 'น้ำเปล่า',
            'cost' => 7,
            'stock_id' => 9,
            'ingredient_group_id' => 4, // เครื่องดื่ม
            'ingredient_unit_id' => 3 // ขวด
        ];
        $data10 = [
            'ingredient' => 'น้ำอัดลม',
            'cost' => 20,
            'stock_id' => 10,
            'ingredient_group_id' => 4, // เครื่องดื่ม
            'ingredient_unit_id' => 3 // ขวด
        ];
        $data11 = [
            'ingredient' => 'เหล้า',
            'cost' => 120,
            'stock_id' => 11,
            'ingredient_group_id' => 4, // เครื่องดื่ม
            'ingredient_unit_id' => 3 // ขวด
        ];
        $data12 = [
            'ingredient' => 'เบียร์',
            'cost' => 65,
            'stock_id' => 12,
            'ingredient_group_id' => 4, // เครื่องดื่ม
            'ingredient_unit_id' => 3 // ขวด
        ];
        $data13 = [
            'ingredient' => 'น้ำแข็ง',
            'cost' => 0.02,
            'stock_id' => 13,
            'ingredient_group_id' => 4, // เครื่องดื่ม
            'ingredient_unit_id' => 1 // กรัม
        ];
        $data14 = [
            'ingredient' => 'น้ำตาลบ๊วย',
            'cost' => 0.18,
            'stock_id' => 13,
            'ingredient_group_id' => 3, // ผลไม้
            'ingredient_unit_id' => 1 // กรัม
        ];
        $data15 = [
            'ingredient' => 'น้ำกะทิ',
            'cost' => 0.2,
            'stock_id' => 13,
            'ingredient_group_id' => 2, // ผลไม้
            'ingredient_unit_id' => 2 // มิลลิลิตร
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
        Ingredient::create($data11);
        Ingredient::create($data12);
        Ingredient::create($data13);
        Ingredient::create($data14);
        Ingredient::create($data15);
    }
}
