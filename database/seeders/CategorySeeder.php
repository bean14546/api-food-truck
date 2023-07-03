<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'Category_Image' => 'https://cdn.pixabay.com/photo/2021/07/04/13/23/green-curry-6386360_1280.jpg',
            'Category_Name' => 'อาหารคาว',
            'Category_Description' => 'อาหารประเภทกับข้าว ราดข้าว เลือกได้ตามใจคุณ'
            
        ];
        $data2 = [
            'Category_Image' => 'https://cdn.pixabay.com/photo/2018/08/14/07/12/mango-sticky-rice-3604851_1280.jpg',
            'Category_Name' => 'อาหารหวาน',
            'Category_Description' => 'อาหารประเภทของหวาน เลือกได้ตามใจคุณ'
        ];
        $data3 = [
            'Category_Image' => 'https://cdn.pixabay.com/photo/2016/04/15/08/04/strawberry-1330459_1280.jpg',
            'Category_Name' => 'ผลไม้',
            'Category_Description' => 'อาหารประเภทผลไม้ เลือกได้ตามใจคุณ'
        ];
        $data4 = [
            'Category_Image' => 'https://cdn.pixabay.com/photo/2018/07/04/00/19/champagne-3515140_1280.jpg',
            'Category_Name' => 'เครื่องดื่ม',
            'Category_Description' => 'อาหารประเภทเครื่องดื่ม เลือกได้ตามใจคุณ'
        ];

        Category::create($data1);
        Category::create($data2);
        Category::create($data3);
        Category::create($data4);
    }
}
