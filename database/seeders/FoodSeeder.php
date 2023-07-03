<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'Food_Name' => 'กะเพรา',
            'Food_Price' => 50,
            'Food_Description' => 'กะเพราร้อน ๆ อร่อยๆ หอม ๆ มัน ๆ ทำเสร็จสด ๆ ร้อน ๆ',
            'Food_Image' => 'https://images.deliveryhero.io/image/fd-th/LH/j6ya-hero.jpg',
            'category_id' => 1,
            'is_recommend' => true,
            'is_new' => true,
            'is_active' => true
        ];
        $data2 = [
            'Food_Name' => 'ข้าวผัด',
            'Food_Price' => 50,
            'Food_Description' => 'ข้าวผัดร้อน ๆ อร่อยๆ หอม ๆ มัน ๆ ทำเสร็จสด ๆ ร้อน ๆ',
            'Food_Image' => 'https://www.boldsky.com/img/2012/08/17-cook.jpg',
            'category_id' => 1,
            'is_recommend' => true,
            'is_new' => true,
            'is_active' => true
        ];
        $data3 = [
            'Food_Name' => 'ต้มยำ',
            'Food_Price' => 50,
            'Food_Description' => 'ต้มยำร้อน ๆ อร่อยๆ หอม ๆ มัน ๆ ทำเสร็จสด ๆ ร้อน ๆ',
            'Food_Image' => 'https://almocooking.com/wp-content/uploads/2019/03/a0000460_parts_5800718482520.jpg',
            'category_id' => 1,
            'is_recommend' => true,
            'is_new' => true,
            'is_active' => true
        ];
        $data4 = [
            'Food_Name' => 'ปลาทอด',
            'Food_Price' => 50,
            'Food_Description' => 'ปลาทอดร้อน ๆ อร่อยๆ หอม ๆ มัน ๆ ทำเสร็จสด ๆ ร้อน ๆ',
            'Food_Image' => 'https://s359.thaibuffer.com/r/600/auto/pagebuilder/bf6e2840-9e31-444c-8ffd-fffc9a585d45.jpg',
            'category_id' => 1,
            'is_recommend' => true,
            'is_new' => true,
            'is_active' => true
        ];
        $data5 = [
            'Food_Name' => 'ผัดคะน้า',
            'Food_Price' => 50,
            'Food_Description' => 'ผัดคะน้าร้อน ๆ อร่อยๆ หอม ๆ มัน ๆ ทำเสร็จสด ๆ ร้อน ๆ',
            'Food_Image' => 'https://f.ptcdn.info/515/064/000/pt6qz910gzsetJoCClJo-o.jpg',
            'category_id' => 1,
            'is_recommend' => true,
            'is_new' => true,
            'is_active' => true
        ];
        $data6 = [
            'Food_Name' => 'ผัดพริกเกลือ',
            'Food_Price' => 50,
            'Food_Description' => 'ผัดพริกเกลือร้อน ๆ อร่อยๆ หอม ๆ มัน ๆ ทำเสร็จสด ๆ ร้อน ๆ',
            'Food_Image' => 'http://www.fondation-wyeth.org/wp-content/uploads/2022/02/%E0%B8%81%E0%B8%B8%E0%B9%89%E0%B8%87%E0%B8%9C%E0%B8%B1%E0%B8%94%E0%B8%9E%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B9%80%E0%B8%81%E0%B8%A5%E0%B8%B7%E0%B8%AD1-1024x653.jpg',
            'category_id' => 1,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];
        $data7 = [
            'Food_Name' => 'บัวลอย',
            'Food_Price' => 30,
            'Food_Description' => 'บัวลอยร้อน ๆ อร่อยๆ หอม ๆ มัน ๆ ทำเสร็จสด ๆ ร้อน ๆ',
            'Food_Image' => 'https://warapornyuii.files.wordpress.com/2018/08/e0b89ae0b8b1e0b8a7e0b8a5e0b8ade0b8a22.jpg',
            'category_id' => 2,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];
        $data8 = [
            'Food_Name' => 'ลอดช่อง',
            'Food_Price' => 30,
            'Food_Description' => 'ลอดช่องร้อน ๆ อร่อยๆ หอม ๆ มัน ๆ ทำเสร็จสด ๆ ร้อน ๆ',
            'Food_Image' => 'http://f.ptcdn.info/287/032/000/1433919781-IMG3046-o.jpg',
            'category_id' => 2,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];
        $data9 = [
            'Food_Name' => 'กล้วยบวชชี',
            'Food_Price' => 30,
            'Food_Description' => 'กล้วยบวชชีร้อน ๆ อร่อยๆ หอม ๆ มัน ๆ ทำเสร็จสด ๆ ร้อน ๆ',
            'Food_Image' => 'https://numsups.com/wp-content/uploads/2021/04/%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%A7%E0%B8%A2%E0%B8%9A%E0%B8%A7%E0%B8%8A%E0%B8%8A%E0%B8%B5-1.jpg',
            'category_id' => 2,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];
        $data10 = [
            'Food_Name' => 'ข้าวต้มมัด',
            'Food_Price' => 30,
            'Food_Description' => 'ข้าวต้มมัดร้อน ๆ อร่อยๆ หอม ๆ มัน ๆ ทำเสร็จสด ๆ ร้อน ๆ',
            'Food_Image' => 'https://www.sentangsedtee.com/wp-content/uploads/2016/12/2187-151210110043.jpg',
            'category_id' => 2,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];
        $data11 = [
            'Food_Name' => 'แอปเปิ้ล',
            'Food_Price' => 25,
            'Food_Description' => 'แอปเปิ้ลหวาน ๆ กรอบ ๆ ปลอดมลพิษ อร่อย ๆ',
            'Food_Image' => 'https://khasmee.files.wordpress.com/2016/08/1386387403_lifestyle.jpg',
            'category_id' => 3,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];
        $data12 = [
            'Food_Name' => 'ฝรั่ง',
            'Food_Price' => 20,
            'Food_Description' => 'ฝรั่งหวาน ๆ กรอบ ๆ ปลอดมลพิษ อร่อย ๆ',
            'Food_Image' => 'http://www.disthai.com/images/content/original-1634715957747.jpg',
            'category_id' => 3,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];
        $data13 = [
            'Food_Name' => 'น้ำเปล่า',
            'Food_Price' => 10,
            'Food_Description' => 'น้ำเปล่าแสนอร่อย ดื่มแล้วสดชื่น สบายใจ หายห่วง',
            'Food_Image' => 'https://www.za.in.th/wp-content/uploads/f198a3a8-91e92586.jpg',
            'category_id' => 4,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];
        $data14 = [
            'Food_Name' => 'น้ำอัดลม',
            'Food_Price' => 15,
            'Food_Description' => 'น้ำอัดลมแสนอร่อย ดื่มแล้วสดชื่น สบายใจ หายห่วง',
            'Food_Image' => 'https://home.maefahluang.org/images/editor/soft-drink.jpg',
            'category_id' => 4,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];
        $data15 = [
            'Food_Name' => 'เหล้า',
            'Food_Price' => 15,
            'Food_Description' => 'สุราแสนอร่อย ดื่มแล้วสดชื่น สบายใจ หายห่วง',
            'Food_Image' => 'https://cdn.pixabay.com/photo/2019/12/02/06/31/vodka-4667049_1280.jpg',
            'category_id' => 4,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];
        $data16 = [
            'Food_Name' => 'เบียร์',
            'Food_Price' => 15,
            'Food_Description' => 'เบียร์แสนอร่อย ดื่มแล้วสดชื่น สบายใจ หายห่วง',
            'Food_Image' => 'https://cdn.pixabay.com/photo/2017/01/21/21/15/beer-1998293_1280.jpg',
            'category_id' => 4,
            'is_recommend' => false,
            'is_new' => false,
            'is_active' => true
        ];

        Food::create($data1);
        Food::create($data2);
        Food::create($data3);
        Food::create($data4);
        Food::create($data5);
        Food::create($data6);
        Food::create($data7);
        Food::create($data8);
        Food::create($data9);
        Food::create($data10);
        Food::create($data11);
        Food::create($data12);
        Food::create($data13);
        Food::create($data14);
        Food::create($data15);
        Food::create($data16);
    }
}
