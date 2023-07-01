<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'Order_Price' => '',
            'order_status_id' => ''
        ];
        $data2 = [
            'Order_Price' => '',
            'order_status_id' => ''
        ];
        $data3 = [
            'Order_Price' => '',
            'order_status_id' => ''
        ];
        $data4 = [
            'Order_Price' => '',
            'order_status_id' => ''
        ];

        Order::create($data1);
        Order::create($data2);
        Order::create($data3);
        Order::create($data4);
    }
}
