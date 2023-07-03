<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            FoodOptionSeeder::class,
            FoodToppingSeeder::class,
            FoodSeeder::class,
            OrderListStatusSeeder::class,
            TimeCountdownSeeder::class,
            OptionDetailSeeder::class,
            OptionSeeder::class,
            ToppingSeeder::class,
            AdminSeeder::class,
            IngredientSeeder::class,
            IngredientGroupSeeder::class,
            IngredientUnitSeeder::class,
            StockSeeder::class,
        ]);
    }
}
