<?php

namespace Database\Seeders;

use App\Models\Topping;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'Topping_Name' => 'ไข่ดาว',
            'Topping_Price' => 5,
            'isActive' => 1
        ];
        $data2 = [
            'Topping_Name' => 'ไข่เจียว',
            'Topping_Price' => 10,
            'isActive' => 1
        ];
        $data3 = [
            'Topping_Name' => 'แคบหมู',
            'Topping_Price' => 5,
            'isActive' => 1
        ];
        $data4 = [
            'Topping_Name' => 'ผักดอง',
            'Topping_Price' => 10,
            'isActive' => 1
        ];
        $data5 = [
            'Topping_Name' => 'ผลไม้ดอง',
            'Topping_Price' => 20,
            'isActive' => 1
        ];
        $data6 = [
            'Topping_Name' => 'ชา',
            'Topping_Price' => 20,
            'isActive' => 1
        ];
        $data7 = [
            'Topping_Name' => 'กาแฟ',
            'Topping_Price' => 20,
            'isActive' => 1
        ];
        $data8 = [
            'Topping_Name' => 'ขนมขบเคี้ยว',
            'Topping_Price' => 10,
            'isActive' => 1
        ];
        $data9 = [
            'Topping_Name' => 'หมูฝอย',
            'Topping_Price' => 25,
            'isActive' => 1
        ];
        $data10 = [
            'Topping_Name' => 'หมูยอ',
            'Topping_Price' => 25,
            'isActive' => 1
        ];

        Topping::create($data1);
        Topping::create($data2);
        Topping::create($data3);
        Topping::create($data4);
        Topping::create($data5);
        Topping::create($data6);
        Topping::create($data7);
        Topping::create($data8);
        Topping::create($data9);
        Topping::create($data10);
    }
}
