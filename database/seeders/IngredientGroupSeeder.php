<?php

namespace Database\Seeders;

use App\Models\IngredientGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'ingredientGroup' => 'วัตถุดิบสำหรับทำอาหาร'
        ];
        $data2 = [
            'ingredientGroup' => 'เครื่องดื่ม'
        ];

        IngredientGroup::create($data1);
        IngredientGroup::create($data2);
    }
}
