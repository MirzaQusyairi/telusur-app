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
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com', 
            'password' => bcrypt('admin'), 
            'phone' => '081234567890',
            'role' => 'administrator'
        ]);

        User::create([
            'name' => 'Mirza Qusyairi',
            'username' => 'mirzaq',
            'email' => 'mirza@gmail.com', 
            'password' => bcrypt('mirza'),
            'phone' => '081234567890',
            'role' => 'author'
        ]);

        User::create([
            'name' => 'Muhammad Sulthon',
            'username' => 'msulthon',
            'email' => 'sulthon@gmail.com', 
            'password' => bcrypt('sulthon'),
            'phone' => '081234567890',
            'role' => 'author'
        ]);

        User::create([
            'name' => 'Mohammed Yusuf',
            'username' => 'yusuf',
            'email' => 'yusuf@gmail.com', 
            'password' => bcrypt('yusuf'),
            'phone' => '081234567890',
            'role' => 'public'
        ]);
    }
}
