<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderStatus;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'Order_Status_Name' => 'รอยืนยัน'
        ];
        $data2 = [
            'Order_Status_Name' => 'กำลังดำเนินการ',
        ];
        $data3 = [
            'Order_Status_Name' => 'ยกเลิก/ล้มเหลว'
        ];
        $data4 = [
            'Order_Status_Name' => 'ดำเนินการสำเร็จ'
        ];

        OrderStatus::create($data1);
        OrderStatus::create($data2);
        OrderStatus::create($data3);
        OrderStatus::create($data4);
    }
}

