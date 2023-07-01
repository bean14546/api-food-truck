<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderListStatus;

class OrderListStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'Order_List_Status_Name' => 'รอยืนยัน'
        ];
        $data2 = [
            'Order_List_Status_Name' => 'กำลังดำเนินการ',
        ];
        $data3 = [
            'Order_List_Status_Name' => 'ยกเลิก/ล้มเหลว'
        ];
        $data4 = [
            'Order_List_Status_Name' => 'ดำเนินการสำเร็จ'
        ];

        OrderListStatus::create($data1);
        OrderListStatus::create($data2);
        OrderListStatus::create($data3);
        OrderListStatus::create($data4);
    }
}
