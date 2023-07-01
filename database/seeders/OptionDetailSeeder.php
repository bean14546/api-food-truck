<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OptionDetail;

class OptionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'Option_Detail_Name' => 'หมู',
            'Option_Detail_Price' => '0',
            'option_id' => '1',
            'isActive' => '1'
        ];
        $data2 = [
            'Option_Detail_Name' => 'ไก่',
            'Option_Detail_Price' => '0',
            'option_id' => '1',
            'isActive' => '1'
        ];
        $data3 = [
            'Option_Detail_Name' => 'กุ้ง',
            'Option_Detail_Price' => '10',
            'option_id' => '1',
            'isActive' => '1'
        ];
        $data4 = [
            'Option_Detail_Name' => 'ปลาหมึก',
            'Option_Detail_Price' => '10',
            'option_id' => '1',
            'isActive' => '1'
        ];
        $data5 = [
            'Option_Detail_Name' => 'มาก',
            'Option_Detail_Price' => '0',
            'option_id' => '2',
            'isActive' => '1'
        ];
        $data6 = [
            'Option_Detail_Name' => 'กลาง',
            'Option_Detail_Price' => '0',
            'option_id' => '2',
            'isActive' => '1'
        ];
        $data7 = [
            'Option_Detail_Name' => 'น้อย',
            'Option_Detail_Price' => '0',
            'option_id' => '2',
            'isActive' => '1'
        ];
        $data8 = [
            'Option_Detail_Name' => 'กระดูกหมู',
            'Option_Detail_Price' => '0',
            'option_id' => '3',
            'isActive' => '1'
        ];
        $data9 = [
            'Option_Detail_Name' => 'กระดูกไก่',
            'Option_Detail_Price' => '0',
            'option_id' => '3',
            'isActive' => '1'
        ];
        $data8 = [
            'Option_Detail_Name' => 'ข้าวเหนียว',
            'Option_Detail_Price' => '0',
            'option_id' => '4',
            'isActive' => '1'
        ];
        $data9 = [
            'Option_Detail_Name' => 'ข้าวสวย',
            'Option_Detail_Price' => '0',
            'option_id' => '4',
            'isActive' => '1'
        ];

        OptionDetail::create($data1);
        OptionDetail::create($data2);
        OptionDetail::create($data3);
        OptionDetail::create($data4);
        OptionDetail::create($data5);
        OptionDetail::create($data6);
        OptionDetail::create($data7);
        OptionDetail::create($data8);
        OptionDetail::create($data9);
    }
}
