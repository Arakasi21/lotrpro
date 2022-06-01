<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '123456',
                'is_admin' => '1',
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => '13456',
                'is_admin' => null,
            ],
            [
                'name' => 'Client',
                'email' => 'client@gmail.com',
                'password' => '13456',
                'is_admin' => null,
            ]
        ];

        foreach($users as $user)
        {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password'])
            ]);
        }
    }
}
