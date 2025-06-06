<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'user_role' => 1,
            'password' => Hash::make('password'),
        ]);

        User::insert([
            [
                'name' => 'Viewer',
                'email' => 'viewer@gmail.com',
                'user_role' => 0,
                'password' => Hash::make('password')
            ],

        ]);
    }
}
