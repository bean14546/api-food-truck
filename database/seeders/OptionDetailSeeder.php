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
            'Option_Detail_Price' => 0,
            'option_id' => 1,
            'isActive' => 1
        ];
        $data2 = [
            'Option_Detail_Name' => 'ไก่',
            'Option_Detail_Price' => 0,
            'option_id' => 1,
            'isActive' => 1
        ];
        $data3 = [
            'Option_Detail_Name' => 'กุ้ง',
            'Option_Detail_Price' => 10,
            'option_id' => 1,
            'isActive' => 1
        ];
        $data4 = [
            'Option_Detail_Name' => 'ปลาหมึก',
            'Option_Detail_Price' => 10,
            'option_id' => 1,
            'isActive' => 1
        ];
        $data5 = [
            'Option_Detail_Name' => 'มาก',
            'Option_Detail_Price' => 0,
            'option_id' => 2,
            'isActive' => 1
        ];
        $data6 = [
            'Option_Detail_Name' => 'กลาง',
            'Option_Detail_Price' => 0,
            'option_id' => 2,
            'isActive' => 1
        ];
        $data7 = [
            'Option_Detail_Name' => 'น้อย',
            'Option_Detail_Price' => 0,
            'option_id' => 2,
            'isActive' => 1
        ];
        $data8 = [
            'Option_Detail_Name' => 'กระดูกหมู',
            'Option_Detail_Price' => 0,
            'option_id' => 3,
            'isActive' => 1
        ];
        $data9 = [
            'Option_Detail_Name' => 'กระดูกไก่',
            'Option_Detail_Price' => 0,
            'option_id' => 3,
            'isActive' => 1
        ];
        $data10 = [
            'Option_Detail_Name' => 'หัวปลา',
            'Option_Detail_Price' => 0,
            'option_id' => 3,
            'isActive' => 1
        ];
        $data11 = [
            'Option_Detail_Name' => 'ข้าวเหนียว',
            'Option_Detail_Price' => 0,
            'option_id' => 4,
            'isActive' => 1
        ];
        $data12 = [
            'Option_Detail_Name' => 'ข้าวสวย',
            'Option_Detail_Price' => 0,
            'option_id' => 4,
            'isActive' => 1
        ];
        $data13 = [
            'Option_Detail_Name' => 'ข้าวกล้อง',
            'Option_Detail_Price' => 0,
            'option_id' => 4,
            'isActive' => 1
        ];
        $data14 = [
            'Option_Detail_Name' => 'น้ำจิ้มซีฟู๊ด',
            'Option_Detail_Price' => 0,
            'option_id' => 5,
            'isActive' => 1
        ];
        $data15 = [
            'Option_Detail_Name' => 'น้ำจิ้มไก่',
            'Option_Detail_Price' => 0,
            'option_id' => 5,
            'isActive' => 1
        ];
        $data16 = [
            'Option_Detail_Name' => 'ร้อน',
            'Option_Detail_Price' => 0,
            'option_id' => 6,
            'isActive' => 1
        ];
        $data17 = [
            'Option_Detail_Name' => 'เย็น',
            'Option_Detail_Price' => 0,
            'option_id' => 6,
            'isActive' => 1
        ];
        $data18 = [
            'Option_Detail_Name' => 'ปกติ',
            'Option_Detail_Price' => 0,
            'option_id' => 6,
            'isActive' => 1
        ];
        $data19 = [
            'Option_Detail_Name' => 'หวานปกติ',
            'Option_Detail_Price' => 0,
            'option_id' => 7,
            'isActive' => 1
        ];
        $data20 = [
            'Option_Detail_Name' => 'หวานน้อย',
            'Option_Detail_Price' => 0,
            'option_id' => 7,
            'isActive' => 1
        ];
        $data21 = [
            'Option_Detail_Name' => 'พริกบ๊วย',
            'Option_Detail_Price' => 0,
            'option_id' => 8,
            'isActive' => 1
        ];
        $data22 = [
            'Option_Detail_Name' => 'พริกผง',
            'Option_Detail_Price' => 0,
            'option_id' => 8,
            'isActive' => 1
        ];
        $data23 = [
            'Option_Detail_Name' => 'น้ำแข็งก้อน',
            'Option_Detail_Price' => 0,
            'option_id' => 9,
            'isActive' => 1
        ];
        $data24 = [
            'Option_Detail_Name' => 'น้ำแข็งปั่น',
            'Option_Detail_Price' => 0,
            'option_id' => 9,
            'isActive' => 1
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
        OptionDetail::create($data10);
        OptionDetail::create($data11);
        OptionDetail::create($data12);
        OptionDetail::create($data13);
        OptionDetail::create($data14);
        OptionDetail::create($data15);
        OptionDetail::create($data16);
        OptionDetail::create($data17);
        OptionDetail::create($data18);
        OptionDetail::create($data19);
        OptionDetail::create($data20);
        OptionDetail::create($data21);
        OptionDetail::create($data22);
        OptionDetail::create($data23);
        OptionDetail::create($data24);
    }
}
