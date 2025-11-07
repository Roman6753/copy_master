<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'login' => 'admin',
            'email' => 'admin@copymaster.ru',
            'password' => Hash::make('admin00'),
            'is_admin' => true,
        ]);

        User::factory(10)->create();
    }
}