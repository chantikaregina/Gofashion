<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('password123'),
                'name' => 'Administrator 1',
                'role' => 'admin',
            ],
        ];
        User::create($user);
    }
}
