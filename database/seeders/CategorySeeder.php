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
            'Category_Image' => 'https://www.pngall.com/wp-content/uploads/2016/03/Food-PNG-File.png',
            'Category_Name' => 'อาหารคาว',
            'Category_Description' => 'อาหารประเภทกับข้าว ราดข้าว เลือกได้ตามใจคุณ'
            
        ];
        $data2 = [
            'Category_Image' => 'https://th.bing.com/th/id/R.c916605a8dd8914aff74982369a17a49?rik=utBCWMyYadZeTg&riu=http%3a%2f%2fwww.pngall.com%2fwp-content%2fuploads%2f7%2fDessert-PNG-Photo.png&ehk=Jscra8rcTCb4oH21YTeq45ta2GObxmsQnHuePQ1B13k%3d&risl=&pid=ImgRaw&r=0',
            'Category_Name' => 'อาหารหวาน',
            'Category_Description' => 'อาหารประเภทของหวาน เลือกได้ตามใจคุณ'
        ];
        $data3 = [
            'Category_Image' => 'https://th.bing.com/th/id/R.c74101d2face0f766daca782d6344310?rik=onkEaWWIDm%2fiRw&riu=http%3a%2f%2fclipart-library.com%2fimages_k%2fpeach-transparent%2fpeach-transparent-10.png&ehk=AxGTHRpKXXzu7pQNmVhCS1bLGxkbGX0JTKKwqPMhIrA%3d&risl=&pid=ImgRaw&r=0',
            'Category_Name' => 'อาหารผลไม้',
            'Category_Description' => 'อาหารประเภทผลไม้ เลือกได้ตามใจคุณ'
        ];
        $data4 = [
            'Category_Image' => 'http://pngimg.com/uploads/cocacola/cocacola_PNG22.png',
            'Category_Name' => 'เครื่องดื่ม',
            'Category_Description' => 'อาหารประเภทเครื่องดื่ม เลือกได้ตามใจคุณ'
        ];

        Category::create($data1);
        Category::create($data2);
        Category::create($data3);
        Category::create($data4);
    }
}
