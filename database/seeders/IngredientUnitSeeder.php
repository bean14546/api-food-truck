<?php

namespace Database\Seeders;

use App\Models\IngredientUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'unit' => 'กรัม'
        ];
        $data2 = [
            'unit' => 'มิลิลิตร'
        ];
        $data3 = [
            'unit' => 'ขวด'
        ];

        IngredientUnit::create($data1);
        IngredientUnit::create($data2);
        IngredientUnit::create($data3);
    }
}
