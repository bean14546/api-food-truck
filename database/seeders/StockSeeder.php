<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'quantity' => 0
        ];
        $data2 = [
            'quantity' => 0
        ];
        $data3 = [
            'quantity' => 0
        ];
        $data4 = [
            'quantity' => 0
        ];
        $data5 = [
            'quantity' => 0
        ];
        $data6 = [
            'quantity' => 0
        ];
        $data7 = [
            'quantity' => 0
        ];
        $data8 = [
            'quantity' => 0
        ];
        $data9 = [
            'quantity' => 0
        ];
        $data10 = [
            'quantity' => 0
        ];
        $data11 = [
            'quantity' => 0
        ];
        $data12 = [
            'quantity' => 0
        ];
        $data13 = [
            'quantity' => 0
        ];
        $data14 = [
            'quantity' => 0
        ];
        $data15 = [
            'quantity' => 0
        ];

        Stock::create($data1);
        Stock::create($data2);
        Stock::create($data3);
        Stock::create($data4);
        Stock::create($data5);
        Stock::create($data6);
        Stock::create($data7);
        Stock::create($data8);
        Stock::create($data9);
        Stock::create($data10);
        Stock::create($data11);
        Stock::create($data12);
        Stock::create($data13);
        Stock::create($data14);
        Stock::create($data15);
    }
}
