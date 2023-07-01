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
            'Topping_Price' => '5',
            'isActive' => '1'
        ];
        $data2 = [
            'Topping_Name' => 'ไข่เจียว',
            'Topping_Price' => '10',
            'isActive' => '1'
        ];
        $data3 = [
            'Topping_Name' => 'แคบหมู',
            'Topping_Price' => '5',
            'isActive' => '1'
        ];
        $data4 = [
            'Topping_Name' => 'กิมจิ',
            'Topping_Price' => '20',
            'isActive' => '1'
        ];

        Topping::create($data1);
        Topping::create($data2);
        Topping::create($data3);
        Topping::create($data4);
    }
}
