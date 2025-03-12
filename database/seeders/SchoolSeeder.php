<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create([
            'name' => 'School 1'
        ]);

        School::create([
            'name' => 'School 2'
        ]);

        School::create([
            'name' => 'School 3'
        ]);
    }
}
