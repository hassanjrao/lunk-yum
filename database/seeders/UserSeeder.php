<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@m.com',
            'password' => bcrypt('password')
        ])->assignRole('admin');

        User::create([
            'name' => 'User',
            'email' => 'user@m.com',
            'password' => bcrypt('password')
        ])->assignRole('user');
    }
}
