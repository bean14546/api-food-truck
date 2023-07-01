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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            CategorySeeder::class,
            // FoodFoodStatusSeeder::class,
            FoodOptionSeeder::class,
            FoodToppingSeeder::class,
            FoodSeeder::class,
            // FoodStatusSeeder::class,
            // OrderListSeeder::class,
            OrderListStatusSeeder::class,
            // OrderSeeder::class,
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
