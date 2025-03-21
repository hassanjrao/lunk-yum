<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name'=>'weekly',
            'days'=>'5',
            'price'=>'1495'
        ]);


        Plan::create([
            'name'=>'monthly',
            'days'=>'30',
            'price'=>'5499'
        ]);
    }
}
