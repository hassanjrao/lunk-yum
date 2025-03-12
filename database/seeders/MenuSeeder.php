<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 5; $i++) {

            Menu::create([
                'week_id' => 1,
                'day_id' => $i,
                'main' => 'Fried Rice',
                'side_1' => 'salad',
                'side_2' => 'chicken'
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {

            Menu::create([
                'week_id' => 2,
                'day_id' => $i,
                'main' => 'Fried Rice',
                'side_1' => 'salad',
                'side_2' => 'chicken'
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {

            Menu::create([
                'week_id' => 3,
                'day_id' => $i,
                'main' => 'Fried Rice',
                'side_1' => 'salad',
                'side_2' => 'chicken'
            ]);
        }

        for ($i = 1; $i <= 5; $i++) {

            Menu::create([
                'week_id' => 4,
                'day_id' => $i,
                'main' => 'Fried Rice',
                'side_1' => 'salad',
                'side_2' => 'chicken'
            ]);
        }
    }
}
