<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=4;$i++){
            \App\Models\Week::create([]);
        }
    }
}
