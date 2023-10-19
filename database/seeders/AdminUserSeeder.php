<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Encore\Admin\Auth\Database\Administrator;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        Administrator::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'name' => 'Admin User',

        ]);
    }
}
