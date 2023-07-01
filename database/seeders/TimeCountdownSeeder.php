<?php

namespace Database\Seeders;

use App\Models\TimeCountdown;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeCountdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = [
            'time' => 5
        ];
        $data2 = [
            'time' => 10
        ];
        $data3 = [
            'time' => 15
        ];
        $data4 = [
            'time' => 20
        ];

        TimeCountdown::create($data1);
        TimeCountdown::create($data2);
        TimeCountdown::create($data3);
        TimeCountdown::create($data4);
    }
}
