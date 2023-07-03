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
            'food_id' => 1, // กะเพรา
            'option_id' => 1 // เนื้อสัตว์
        ];
        $data2 = [
            'food_id' => 1, // กะเพรา
            'option_id' => 2 // ความเผ็ด
        ];
        $data3 = [
            'food_id' => 1, // กะเพรา
            'option_id' => 3 // น้ำซุป
        ];
        $data4 = [
            'food_id' => 2, // ข้าวผัด
            'option_id' => 1 // เนื้อสัตว์
        ];
        $data5 = [
            'food_id' => 2, // กะเพรา
            'option_id' => 3 // น้ำซุป
        ];
        $data6 = [
            'food_id' => 3, // ต้มยำ
            'option_id' => 1 // เนื้อสัตว์
        ];
        $data7 = [
            'food_id' => 3, // ต้มยำ
            'option_id' => 4 // ข้าว
        ];
        $data8 = [
            'food_id' => 4, // ปลาทอด
            'option_id' => 5 // น้ำจิ้ม
        ];
        $data9 = [
            'food_id' => 4, // ปลาทอด
            'option_id' => 4 // ข้าว
        ];
        $data10 = [
            'food_id' => 5, // ผัดคะน้า
            'option_id' => 1 // เนื้อสัตว์
        ];
        $data11 = [
            'food_id' => 5, // ผัดคะน้า
            'option_id' => 2 // ความเผ็ด
        ];
        $data12 = [
            'food_id' => 5, // ผัดคะน้า
            'option_id' => 4 // ข้าว
        ];
        $data13 = [
            'food_id' => 6, // ผัดพริกเกลือ
            'option_id' => 1 // เนื้อสัตว์
        ];
        $data14 = [
            'food_id' => 6, // ผัดพริกเกลือ
            'option_id' => 3 // เนื้อสัตว์
        ];
        $data15 = [
            'food_id' => 6, // ผัดพริกเกลือ
            'option_id' => 5 // ข้าว
        ];
        $data16 = [
            'food_id' => 7, // บัวลอย
            'option_id' => 7 // ความหวาน
        ];
        $data17 = [
            'food_id' => 8, // ลอดช่อง
            'option_id' => 7 // ความหวาน
        ];
        $data18 = [
            'food_id' => 9, // กล้วยบวชชี้
            'option_id' => 7 // ความหวาน
        ];
        $data19 = [
            'food_id' => 10, // ข้าวต้มมัด
            'option_id' => 7 // ความหวาน
        ];
        $data20 = [
            'food_id' => 11, // แอปเปิ้ล
            'option_id' => 8 // ความหวาน
        ];
        $data21 = [
            'food_id' => 12, // ฝรั่ง
            'option_id' => 8 // ความหวาน
        ];
        $data22 = [
            'food_id' => 13, // น้ำเปล่า
            'option_id' => 9 // น้ำแข็ง
        ];
        $data23 = [
            'food_id' => 14, // น้ำอัดลม
            'option_id' => 9 // น้ำแข็ง
        ];
        $data24 = [
            'food_id' => 15, // เหล้า
            'option_id' => 9 // น้ำแข็ง
        ];
        $data25 = [
            'food_id' => 16, // เบียร์
            'option_id' => 9 // น้ำแข็ง
        ];

        FoodOption::create($data1);
        FoodOption::create($data2);
        FoodOption::create($data3);
        FoodOption::create($data4);
        FoodOption::create($data5);
        FoodOption::create($data6);
        FoodOption::create($data7);
        FoodOption::create($data8);
        FoodOption::create($data9);
        FoodOption::create($data10);
        FoodOption::create($data11);
        FoodOption::create($data12);
        FoodOption::create($data13);
        FoodOption::create($data14);
        FoodOption::create($data15);
        FoodOption::create($data16);
        FoodOption::create($data17);
        FoodOption::create($data18);
        FoodOption::create($data19);
        FoodOption::create($data20);
        FoodOption::create($data21);
        FoodOption::create($data22);
        FoodOption::create($data23);
        FoodOption::create($data24);
        FoodOption::create($data25);
    }
}
