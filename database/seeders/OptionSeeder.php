<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'Option_Name' => 'เนื้อสัตว์'
        ];
        $data2 = [
            'Option_Name' => 'ความเผ็ด'
        ];
        $data3 = [
            'Option_Name' => 'น้ำซุป'
        ];
        $data4 = [
            'Option_Name' => 'ข้าว'
        ];
        $data5 = [
            'Option_Name' => 'น้ำจิ้ม'
        ];
        $data6 = [
            'Option_Name' => 'อุณภูมิ'
        ];
        $data7 = [
            'Option_Name' => 'ความหวาน'
        ];
        $data8 = [
            'Option_Name' => 'เคริ่องจิ้ม'
        ];
        $data9 = [
            'Option_Name' => 'น้ำแข็ง'
        ];

        Option::create($data1);
        Option::create($data2);
        Option::create($data3);
        Option::create($data4);
        Option::create($data5);
        Option::create($data6);
        Option::create($data7);
        Option::create($data8);
        Option::create($data9);
    }
}
