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
            'ingredientGroup' => 'วัตถุดิบสำหรับของหวาน'
        ];
        $data3 = [
            'ingredientGroup' => 'วัตถุดิบสำหรับผลไม้'
        ];
        $data4 = [
            'ingredientGroup' => 'วัตถุดิบสำหรับเครื่องดื่ม'
        ];

        IngredientGroup::create($data1);
        IngredientGroup::create($data2);
        IngredientGroup::create($data3);
        IngredientGroup::create($data4);
    }
}
