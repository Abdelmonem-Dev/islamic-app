<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        // Admin User
        $admin = User::firstOrCreate(
            ['email' => 'Admin@Admin.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'), // change later
            ]
        );
        $admin->assignRole('admin');

        // Normal User
        $user = User::firstOrCreate(
            ['email' => 'user@user.com'],
            [
                'name' => 'Normal User',
                'password' => bcrypt('password'),
            ]
        );
        $user->assignRole('user');

        // Parent User
        $parent = User::firstOrCreate(
            ['email' => 'Parent@Parent.com'],
            [
                'name' => 'Parent User',
                'password' => bcrypt('password'),
            ]
        );
        $parent->assignRole('parent');
    }
}
